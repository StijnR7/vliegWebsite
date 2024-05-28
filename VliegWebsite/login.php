<?php 
include('connection.php');

$user = $_POST['username'];

$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$user' and password = '$pass'";


$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
if($result == null){
echo "fout";


}
else{
foreach($result AS $key => $value){
foreach($value AS $key1 => $value1){

if ($key1 == 'username'){
  $user = $value1;
}
elseif ($key1 == 'password'){
  $pass = $value1;
}
elseif ($key1 == 'email'){
  $email = $value1;
}

}
$_SESSION["username"] = $user;
$_SESSION["password"] = $pass;
$_SESSION["email"] = $email;

echo '
  <p> Username: ' . $_SESSION["username"] .'</p>
  <p> Password: ' . $_SESSION["password"] .'</p>
  <p> E-mail: ' . $_SESSION["email"] .'</p>



  ';
}}

?>