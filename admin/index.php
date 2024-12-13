<?php 
  require "config.php";

  //login form submission
  if(isset($_POST['login_submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
      $row = mysqli_fetch_assoc($result);
      
      $_SESSION['ADMIN_LOGGED_IN'] = true;
      $_SESSION['ADMIN_ID'] = $row['id'];
      $_SESSION['ADMIN_USERNAME'] = $row['username'];

      echo "<script>window.location.assign('blog')</script>";
    }
    else 
    {
      echo "<script>alert('Invalid login details')</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">

    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center justify-content-center p-0 auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center bg-dark" style="width: fit-content; margin: 0 auto 20px auto">
                <img src="assets/images/logo.png" alt="logo">
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" id="login_form" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" required placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="password" required placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="login_submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
</body>
</html>