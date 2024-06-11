<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $vluchtID = $_POST['vluchtID'];


    $conn->beginTransaction();

    try {
   
        $sql = "DELETE FROM orderinfo WHERE vluchtID = :vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID, PDO::PARAM_INT);
        $stmt->execute();

        $sql = "DELETE FROM vlucht WHERE vluchtID = :vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID, PDO::PARAM_INT);

        if ($stmt->execute()) {
          
            $conn->commit();
            echo "Vlucht succesvol verwijderd.";
        } else {
            
            $conn->rollBack();
            echo "Error deleting vlucht: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
       
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vluchten = $stmt->fetchAll();
?>