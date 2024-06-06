<?php

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {

    $product_id = $_POST['id']; 

    $pdo = "DELETE FROM producten WHERE id=?";

    $stmt = $conn->prepare($pdo);

    $stmt->bindParam(1, $product_id);

    if ($stmt->execute()) {
        echo "Product verwijderd succesvol";
    } else {
        echo "Error deleting product: " . $stmt->errorInfo()[2]; 
    }
}

$stmt = $conn->query("SELECT * FROM producten");
$products = $stmt->fetchAll();

?>