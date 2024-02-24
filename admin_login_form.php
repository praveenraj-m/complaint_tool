<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  class="container bg-light">
  <h1 class="text-center mt-5">Admin Login</h1>
  <div class="container bg-info">
    <form action="admin_login_process.php" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
	<div class="text-center">
		<button type="submit" class="btn btn-secondary">Submit</button>
	</div>
    </form>
  </div>
</body>

  </div>
</body>
</html>
