<?php
$host = 'https://bloghive.herokuapp.com';
$user = 'root';
$pass = '';
$dbName = 'blog';

$conn = new MySqli($host, $user, $pass, $dbName);
if($conn -> connect_error) {
  die('database connection error: '.$conn -> connect_error);
} else {
  //echo "Database Connected Successfully.";
}
?>
