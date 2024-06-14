<?php

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {

    $vluchtID = $_POST['id']; 

    $pdo = "DELETE FROM vlucht WHERE id=?";

    $stmt = $conn->prepare($pdo);

    $stmt->bindParam(1, $vluchtID);

    if ($stmt->execute()) {
        echo "Product verwijderd succesvol";
    } else {
        echo "Error deleting product: " . $stmt->errorInfo()[2]; 
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vlucht = $stmt->fetchAll();

?>