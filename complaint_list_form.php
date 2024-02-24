<?php
	/* Fetch user_information to select the record */
	include "connection.php";

	if ($_GET){
		
		/*  Check the UserID and delete the specific User record */
		if ($_GET['complaint_id'] != "") {
			$sql = "SELECT * FROM complaint_info WHERE complaint_id='".$_GET['complaint_id']."'";
			$result = $conn->query($sql);
			 if ($result->num_rows > 0) {
				// User
				$row = $result->fetch_assoc();
			}
		
		}
		
		?>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		</head>
			<body>
				<div class="container p-3 mb-2 bg-info text-white">
					<div class="row justify-content-center"> 
						<div class="col-md-2" style="border:0px solid red;"> 
							<h2 style="border:0px solid red; width:360px">Edit Details</h2>
							<form method="post" action="complaint_list_form.php">
								<label for="trackingStatus">Tracking Status:</label>
								
								<select name="tracking_status">
									<?php 
										if ($row['tracking_status'] != "") {
											$sql = "SELECT status_name FROM complaint_status ";
											$result = $conn->query($sql);
											 if ($result->num_rows > 0) {
												// User												
												while ($statusData = $result->fetch_assoc()){ 
												
												$select = "";
												if ($statusData["status_name"] == $row["tracking_status"]){
													$select = "selected";
												}
												?>
												 <option value="<?php echo $statusData["status_name"]?>" <?php echo $select ?> >
													<?php echo $statusData["status_name"]?>
												 </option>
												<?php }
											}
										
										 } 
									?>
								</select>
								
								<br>
								<label for="adminRemarks">Admin Remarks:</label>
								<textarea id="admin_remarks" rows="10" cols="50" name="admin_remarks"><?php echo $row["admin_remarks"] ?></textarea>
								<br>
								<input type="hidden" value="<?php echo $row["complaint_id"] ?>" name="complaint_id" >
								<input type="submit" class="point" value="Update">
							</form>
						</div>
					</div>
				</div>	
			</body>
	</html>
	
		<script>
		   window.onload = function(){
				
				 // Get the textarea element
				var textarea = document.getElementById('admin_remarks');

				// Set focus on the textarea
				textarea.focus();
				
				// Set cursor position at the end of the content
				textarea.selectionStart = textarea.selectionEnd = textarea.value.length;
		   }
		</script>
		<?php
	}
	
	if ($_POST){
		
		/*  Check the UserID and delete the specific User record */
		if ($_POST['complaint_id'] != "") {
			$sql = "UPDATE complaint_info SET tracking_status='".$_POST['tracking_status']."', admin_remarks='".$_POST['admin_remarks']."' WHERE complaint_id ='".$_POST['complaint_id']."' ";
			$result = $conn->query($sql);
			
			header("refresh:0;url=complaint_list_form.php");
		
		}
	}
	
	/* Include complaint list code */
	include "complaint_list.php";
?>

