<?php 
session_start();

unset($_SESSION['ADMIN_LOGGED_IN']);
unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_ADMIN_USERNAMELOGGED_IN']);

echo "<script>window.location.assign('index')</script>";
?>