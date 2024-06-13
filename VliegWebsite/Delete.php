<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $vluchtID = $_POST['vluchtID'];


    $conn->beginTransaction();

    try {
   
        $sql = "DELETE FROM orderinfo WHERE vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID);
        $stmt->execute();

        $sql = "DELETE FROM vlucht WHERE vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID);

        if ($stmt->execute()) {
          
            $conn->commit();
            echo "Vlucht succesvol verwijderd.";
        } else {
            
            $conn->rollBack();
            echo "Error deleting vlucht: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
       
        echo "Error: " . $e->getMessage();
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vluchten = $stmt->fetchAll();
?>