<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Tracking</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body class="container bg-light">
  <div class="container">
    <h1 class="text-center mt-5">Complaint Tracking</h1>
 
	<div class="container bg-info">
		<form action="complaint_tracking.php" method="POST">
		  <div class="form-group">
			<label for="complaint-id"><b>Tracking ID</b></label>
			<input type="text" class="form-control" id="complaint_Id" name="tracking_id" required><br />
			<div class="text-center">
				<button type="submit" class="btn btn-secondary">Search</button>
			</div>
		  </div>
		</form>
		
		
		<?php 
		    if ($_POST) {
				
				include "connection.php";
				
				$tracking_id = $_POST['tracking_id'];
				
				// Check if the complaint with the generated tracking ID already exists
				$sql_check = "SELECT * FROM complaint_info WHERE tracking_id = '".$tracking_id."'";
				//echo $sql_check . "<br>";

				$result_check = $conn->query($sql_check);
				//echo $result_check->num_rows . "<br>";

				if ($result_check->num_rows > 0) {
					// Complaint with the same tracking ID already exists
					$row = $result_check->fetch_assoc();
					$tracking_id = $row["tracking_id"];
					$name = $row["name"];
					echo "<br /><h1>Tracking ID: $tracking_id</h1>";
					echo "<br /><h1>Name of the Person raised Complaint: $name</h1>";
					header("refresh:3;url=index.php");
				}
				else {
					echo "<h1>Complaint Id not found</h1>";
					header("refresh:3;url=index.php");
				}
			}
		?>
	</div>
  </div>
</body>
</html>
