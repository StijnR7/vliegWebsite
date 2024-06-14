<?php

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {

    $sql = "DELETE FROM vlucht WHERE vluchtID = :vluchtID";
    $stmt = $conn->prepare($pdo);
    $stmt->bindParam(':vluchtID', $vluchtID);

    if ($stmt->execute()) {
        echo "Product verwijderd succesvol";
    } else {
        echo "Error deleting product: " . $stmt->errorInfo()[2]; 
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vlucht = $stmt->fetchAll();

?>