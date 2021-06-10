<?php include "../env.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $APP_NAME; ?></title>
  <link rel="icon" href="../img/<?php echo $ICON; ?>">
  <?php include 'register.php' ?>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body class="bg-info">
	<div class="card w-50 p-2" style="position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);"><div class="row text-center w-100 h-25 align-self-center text-white">
    <a href="../login" class="btn w-50 btn-secondary rounded-pill">Login</a>
    <a href="" class="btn w-50 btn-primary rounded-pill">Register</a>
  </div>
  <form action="register.php" method="POST" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary" name="register">Register</button>
  </form>
</div>
<?php include "../footer.php" ?>
</div>
</body>
</html>