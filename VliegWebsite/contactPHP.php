<?php 
include('connection.php');

$subject = $_POST['onderwerp'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$sql = "INSERT INTO contact(email, onderwerp, bericht) VALUES ("$subject", "$email", "$bericht")";


$stmt = $conn->prepare($sql);
$stmt->execute();
?>