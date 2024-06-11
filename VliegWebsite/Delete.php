<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $vluchtID = $_POST['vluchtID'];

    // Begin transaction
    $conn->beginTransaction();

    try {
        // Delete related rows in orderinfo
        $sql = "DELETE FROM orderinfo WHERE vluchtID = :vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID, PDO::PARAM_INT);
        $stmt->execute();

        // Delete row in vlucht
        $sql = "DELETE FROM vlucht WHERE vluchtID = :vluchtID";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID, PDO::PARAM_INT);

        if ($stmt->execute()) {
            // Commit transaction
            $conn->commit();
            echo "Vlucht succesvol verwijderd.";
        } else {
            // Rollback transaction
            $conn->rollBack();
            echo "Error deleting vlucht: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        // Rollback transaction in case of error
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vluchten = $stmt->fetchAll();
?>