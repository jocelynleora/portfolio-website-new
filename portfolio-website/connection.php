<?php
$servername = "localhost";
$user = "root";
$pass = ""; //diisi sesuai password

$dbname = "portfolio_website";

$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>