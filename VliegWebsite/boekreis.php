<?php
include ('connection.php');
session_start();

$vluchtID = $_POST["product_id"];
$prijs = $_POST["prijs"];
$vetrekDatum = $_POST["vertrekDat"];
if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO orderinfo(vluchtID, userID, vertrekDatum, prijs) VALUES (:vluchtID, :userID, :prijs, :vertrekDat)";
    $stmt = $conn->prepare($sql);

    // Bind the actual values to the placeholders
    $stmt->bindParam(':vluchtID', $vluchtID);
    $stmt->bindParam(':userID', $userID);
    $stmt->bindParam(':vertrekDat', $vetrekDatum);
    $stmt->bindParam(':prijs', $prijs);

    // Execute the statement
    $stmt->execute();
    header('Location: index.php');
} else {
    header('Location: inlog.php');

}


?>