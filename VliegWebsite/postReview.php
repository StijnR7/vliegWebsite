<?php 
include("connection.php");
include("reviews.php");

$email = $_POST["mail"];
$message = $_POST["review"];

$sql="INSERT INTO reviews(email, message) VALUES (:email, :message )";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);
$stmt->execute();

?>