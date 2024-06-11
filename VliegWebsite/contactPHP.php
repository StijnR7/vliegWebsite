<?php 
include('connection.php');

$naam = $_POST["naam"];
$subject = $_POST['onderwerp'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$sql="INSERT INTO contact(naam, email, onderwerp, bericht) VALUES ('$naam', '$email', '$subject', '$bericht' )";


$stmt = $conn->prepare($sql);
$stmt->execute();
?>