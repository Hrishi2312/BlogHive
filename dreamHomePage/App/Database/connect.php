<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'blog';
$limit = 12;

$conn = new MySqli($host, $user, $pass, $dbName);
if($conn -> connect_error) {
  die('database connection error: '.$conn -> connect_error);
} else {
  //echo "Database Connected Successfully.";
}
?>
