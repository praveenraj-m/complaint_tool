<!DOCTYPE html>
<html lang="en">
<?php include 'connection.php' ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Tool</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">

</head>
<body style="background-color: #cce6ff" >
  <div class="container">
    <h1 class="text-center mt-5">Welcome to Complaint Tool</h1>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-body">
            <h5 class="card-title">Complaint Submission Form</h5>
            <p class="card-text">Submit your complaint here.</p>
            <a href="complaint_form.php" class="btn btn-secondary">Submit Complaint</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-body">
            <h5 class="card-title">Complaint Tracking</h5>
            <p class="card-text">Track your complaint using Complaint ID.</p>
            <a href="complaint_tracking.php" class="btn btn-secondary">Track Complaint</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card bg-info">
			<div class="card-body">
            <h5 class="card-title">Admin Dashboard</h5>
            <p class="card-text">Manage complaints and view reports.</p>
            <a href="admin_login_form.php" class="btn btn-secondary">Admin Dashboard</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
