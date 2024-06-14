<?php
include "../../config.php";

// Check if emailChange parameter is set in the URL
if (!isset($_GET['emailChange'])) {
    header('Location: ../forgot-password.php');
    exit();
}

// Get the email from the URL
$email = $_GET['email'];

// Sanitize the email if needed
$email = mysqli_real_escape_string($db, $email);

// Create your SQL query to fetch user details (adjust according to your database structure)
$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query($db, $sql);

// Check if a user with that email exists
if (mysqli_num_rows($query) < 1) {
    echo '<div class="alert alert-danger" role="alert">
  User not found...
</div>';
}

// Fetch the user data
$users = mysqli_fetch_assoc($query);

// Close the database connection or handle further operations
mysqli_close($db);

// Proceed to display the new password form with retrieved email
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New Password Page</title>

  <!-- CDN AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <link rel="stylesheet" href="../plugins//icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Shoes</b>Market</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masukkan Password Baru</p>
      <form action="proses-edit-forgot-password.php" method="post">
      <input type="hidden" name="email" value="<?php echo $users['email'] ?>" />
      <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password Baru" name="password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="retype_password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" name="simpanpass" class="btn btn-primary btn-block" value="Submit new password"></input>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="../forgot-password.php">Back</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->

<!-- CDN JS AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
