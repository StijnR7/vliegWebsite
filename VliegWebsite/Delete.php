<?php
include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    if (isset($_POST['vluchtID'])) {
        $vluchtID = $_POST['vluchtID'];
        $sql = "DELETE FROM vlucht WHERE vluchtID = :vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID);
        if ($stmt->execute()) {
            echo "Product succesvol verwijderd";
        } else {
            echo "Error deleting product: " . $stmt->errorInfo()[2];
        }


}

}
