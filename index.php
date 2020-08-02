<?php
require('DBCon.php');
session_start();

$message="";
if(!empty($_POST["login"])) {
  $result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and userPassword = '". $_POST["userPassword"]."' and userType = '". $_POST["userType"]."'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row)) {
    $_SESSION["user_id"] = $row['userID'];
    $_SESSION["username"] = $row['userFullName'];
    header("Location: applySticker.php"); 

  } else {
    $message = "Invalid Username or Password!";
  }
}

if(!empty($_POST["login"])) {
  $result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and userPassword = '". $_POST["userPassword"]."' and userType = 'Admin'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row)) {
    $_SESSION["user_id"] = $row['userID'];
    $_SESSION["username"] = $row['userFullName'];
    header("Location: admin/report.php"); 

  } else {
    $message = "Invalid Username or Password!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>UMPVi - Login</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="backg"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome to UMPVi</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="userPassword" placeholder="Enter your password">
                    </div>
                    <div class="card position-relative">
                      <select name="userType">
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                        <option value="Student">Student</option>                        
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="login">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

