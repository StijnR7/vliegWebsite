<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id']; 
    $prijs = $_POST['prijs']; 
    $vertrekDatum = $_POST['vertrekDat']; 
   
    $userID = 1; 
    $stayID = 1; 
    $kinderen = 1; 
    $volwassenen = 2; 

    $sql = "INSERT INTO `bookings` (`vluchtID`, `idSale`, `userID`, `stayID`, `kinderen`, `volwassenen`, `vertrekDatum`, `prijs`) 
            VALUES (:vluchtID, :idSale, :userID, :stayID, :kinderen, :volwassenen, :vertrekDatum, :prijs)";

    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':vluchtID', $product_id);
    $stmt->bindParam(':idSale', $product_id); 
    $stmt->bindParam(':userID', $userID);
    $stmt->bindParam(':stayID', $stayID);
    $stmt->bindParam(':kinderen', $kinderen);
    $stmt->bindParam(':volwassenen', $volwassenen);
    $stmt->bindParam(':vertrekDatum', $vertrekDatum);
    $stmt->bindParam(':prijs', $prijs);


    if ($stmt->execute()){
        echo "toevoegt";
    }
    
}

?>