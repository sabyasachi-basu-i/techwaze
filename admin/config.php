<?php 
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "techwaze";

$conn = mysqli_connect($host,$user,$password,$db) or die('Database connection failed');

?>