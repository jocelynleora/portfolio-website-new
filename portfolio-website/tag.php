<?php

header('Content-Type: application/json');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Perform any necessary validation or processing here

$response = [
  'success' => true,
  'message' => 'Your message has been sent successfully!'
];

echo json_encode($response);

?>