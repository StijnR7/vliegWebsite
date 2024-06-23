<?php 
include('connection.php');
session_start();
$user = $_POST['username'];

$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :user and password = :pass";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user', $user);
$stmt->bindParam(':pass', $pass);



$stmt->execute();

$result = $stmt->fetchAll();
    
if($result == null){
echo "fout";


}
else{

foreach($result AS $key1 => $value1){


  $user = $value1['username'];


  $pass = $value1['password'];


  $email = $value1['email'];


  $userID = $value1['userID'];


  $perms = $value1['permissions'];


}
$_SESSION["username"] = $user;
$_SESSION["userID"] = $userID;
$_SESSION["password"] = $pass;
$_SESSION["email"] = $email;
$_SESSION["permissions"] = $perms;
header("Location: index.php");
}

?>