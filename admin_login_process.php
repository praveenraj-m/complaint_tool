<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<title>Admin login</title>
	</head>
	<body class="bg-info text-white p-5">

		<div class="container">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				// Connect to database 
				include "connection.php";
				
				// Capture form data
				$email 	  = $_POST["email"];
				$password = $_POST["password"];

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

			 // Retrieve user data based on email
				$sql = "SELECT count(*) admin_flag FROM admin_info WHERE admin_email = '$email' AND admin_password = '$password' ";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					// Complaint with the same tracking ID already exists
					$row = $result->fetch_assoc();
					$record_count = $row["admin_flag"];
					
					if ($record_count > 0){
						header("refresh:0;url=complaint_list_form.php");
					} else {
						echo "<h1>Admin record not available !</h1>";
						header("refresh:3;url=admin_login_form.php");

					}
					
				}			

				// Close the database connection
				$conn->close();
			}
			?>
		</div>
	</body>
</html>