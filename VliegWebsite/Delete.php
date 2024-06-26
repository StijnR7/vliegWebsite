<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Delete'])) {
    $flight_id = $_POST['vluchtID'];

   
    $stmt = $conn->prepare("DELETE FROM orderinfo WHERE vluchtID = :vluchtID");
    $stmt->bindParam(':vluchtID', $flight_id);
    $stmt->execute();

   
    $stmt = $conn->prepare("DELETE FROM vlucht WHERE vluchtID = :vluchtID");
    $stmt->bindParam(':vluchtID', $flight_id);
    $stmt->execute();

   

   

    if ($stmt->execute()) {
        echo "Product verwijderd succesvol";
    } else {
        echo "Error deleting product: " . $stmt->errorInfo()[2]; 
    }
    echo "Record deleted successfully";
}

$stmt = $conn->query("SELECT * FROM vlucht");
?>