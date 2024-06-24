<?php
include ('connection.php');


$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
VALUES (:user, :email, :pass) ";
$stmt->bindParam(':user', $user);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':pass', $pass);

$stmt = $conn->prepare($sql);
$stmt->execute();


?>