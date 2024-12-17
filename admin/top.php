<?php 
  require "config.php";

  //If not login, redirect to login page
  if (empty($_SESSION['ADMIN_LOGGED_IN']) || $_SESSION['ADMIN_LOGGED_IN'] == false) {
    echo "<script>window.location.assign('index')</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- richtext -->
  <link rel="stylesheet" href="richtexteditor/style.css">
  <link rel="stylesheet" href="richtexteditor/rte_theme_default.css"/>
  <script type="text/javascript" src="richtexteditor/rte.js"></script>
  <script>
    RTE_DefaultConfig.url_base = "richtexteditor";
  </script>
  <script type="text/javascript" src="richtexteditor/plugins/all_plugins.js"></script>
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    
   <!-- top nav -->
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
        <li class="nav-item nav-toggler-item">
          <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        </li>
        
      </ul>
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo bg-dark" href="blog" style="width: fit-content; margin: 0 auto">
          <img src="assets/images/logo.svg" alt="logo"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="blog">
          <img src="assets/images/favicon.ico" alt="logo"/>
        </a>
      </div>
      <ul class="navbar-nav navbar-nav-right">
        
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <span class="nav-profile-name"><?php echo $_SESSION['ADMIN_USERNAME'] ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout">
              <i class="mdi mdi-logout text-primary"></i>
              Logout
            </a>
          </div>
        </li>
        
        <li class="nav-item nav-toggler-item-right d-lg-none">
          <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid page-body-wrapper">

    <!-- sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="blog">
            <i class="mdi mdi-pencil-box-outline menu-icon"></i>
            <span class="menu-title">Blog</span>
          </a>
        </li>
      </ul>
    </nav>