<?php
include ('connection.php');


$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
VALUES ('$user', '$email', '$pass') ";

$stmt = $conn->prepare($sql);
$stmt->execute();


?>