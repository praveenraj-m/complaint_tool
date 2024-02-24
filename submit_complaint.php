<?php
include "connection.php";

// Generate tracking ID
$tracking_id = rand(2000000000, 2147483646);

// Check if the complaint with the generated tracking ID already exists
$sql_check = "SELECT complaint_id FROM complaint_info WHERE tracking_id = '$tracking_id'";
//echo $sql_check . "<br>";

$result_check = $conn->query($sql_check);
//echo $result_check->num_rows . "<br>";

if ($result_check->num_rows > 0) {
    // Complaint with the same tracking ID already exists
    $row = $result_check->fetch_assoc();
    $complaint_id = $row["complaint_id"];
    echo "Complaint with the same tracking ID already exists! Complaint ID: $complaint_id";
} else {
    // Prepare and bind SQL statement to insert the new complaint
	$tracking_status = "Open";
		
	// Get the IP address of the client
	$ipAddress = $_SERVER['REMOTE_ADDR'];

	// If the server is behind a proxy or load balancer, use these headers
	if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
		$ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} elseif (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
		$ipAddress = $_SERVER['HTTP_CLIENT_IP'];
	}
	
    $stmt = "INSERT INTO complaint_info (tracking_id, name, email, phone, description,tracking_status,ip_address) 
										 VALUES ('".$tracking_id."', '".$_POST['name']."', 
										 '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['description']."', '".$tracking_status."', '".$ipAddress."')";
	//echo $stmt . "<br>";
	
    // Execute the statement
    if ($conn->query($stmt) === TRUE) {
        $complaint_id = $conn->insert_id; // Get the auto-incremented complaint ID
        echo "<html><body bgcolor='#17a2b8';><h1 style='text-align:center'>Complaint submitted successfully!<br> Tracking ID: $tracking_id</h1></body></html>";
		header("refresh:6;url=index.php");

    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close the database connection
$conn->close();
?>
