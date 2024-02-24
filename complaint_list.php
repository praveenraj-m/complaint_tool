<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Tool</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Custom CSS for alternating row colors */
    .custom-table tbody tr:nth-child(odd) {
      background-color: #ffffff; /* Primary color */
      color: white; /* Text color for contrast */
	  
    }
  </style>
 </head>

<?php
	// Retrieve all complaint_info data 
	$sql = "SELECT * FROM complaint_info";
	$result = $conn->query($sql);
	
	// Check the number of rows
	if ($result->num_rows > 0) {
		// Output data of each row
	?>	
		<div class="container p-2  text-dark  text-left" style="width:50% table-responsive" >
			<h1 class="text-center"><b>Complaint List</b></h1>

			<table class="table custom-table table-bordered table-striped text-center bg-info text-dark" ">
				<thead class="text-dark">
					<tr>
						<th>S.No</th>
						<th>Complaint ID</th>
						<th>Tracking ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Description</th>
						<th>Tracking Status</th>
						<th>Admin Remarks</th>
						<th>Action</th>
					</tr>
				</thead>
			<?php
			
				//Initialize record counter
				$record_counter = 1;
				
				while ($row = $result->fetch_assoc()) { ?>
					<tr class="text-dark">
					
						<td align="center" ><?php echo $record_counter++ ?></td>
						<td><?php echo $row["complaint_id"] ?></td>
						<td><?php echo $row["tracking_id"] ?></td>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["email"] ?></td>
						<td><?php echo $row["phone"] ?></td>
						<td><?php echo $row["description"] ?></td>
						<td><?php echo $row["tracking_status"] ?></td>
						<td><?php echo $row["admin_remarks"] ?></td>
						<td>
							<a href="complaint_list_form.php?complaint_id=<?php echo $row["complaint_id"] ?>" class="btn btn-dark">Edit</a>
						</td>
					</tr>
				<?php } 
			?>
			</tbody>
		</table>

	<?php 		
	} else {?>
		<table border="1">
		    <tr>
				<td>No records matched !</td>
			</tr>				
		</table>
	<?php } ?>