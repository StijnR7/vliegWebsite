<?php
include('connection.php');

if (isset($_POST['register'])) {
    $bestemmingsStad = $_POST['bestemmingsStad'];
    $vertrekStad = $_POST['vertrekStad'];
    $bestemmingsLand = $_POST['bestemmingsLand'];
    $vertrekLand = $_POST['vertrekLand'];
    $reistijd = $_POST['reistijd'];
    $vertrekDatum = $_POST['vertrekDatum'];
    $Prijs = $_POST['Prijs'];

    try {
        $stmt = $conn->prepare("INSERT INTO vlucht (bestemmingsStad, vertrekStad, bestemmingsLand, vertrekLand, reistijd, vertrekDatum, Prijs) VALUES (:bestemmingsStad, :vertrekStad, :bestemmingsLand, :vertrekLand, :reistijd, :vertrekDatum, :Prijs)");
        
        $stmt->bindParam(':bestemmingsStad', $bestemmingsStad);
        $stmt->bindParam(':vertrekStad', $vertrekStad);
        $stmt->bindParam(':bestemmingsLand', $bestemmingsLand);
        $stmt->bindParam(':vertrekLand', $vertrekLand);
        $stmt->bindParam(':reistijd', $reistijd);
        $stmt->bindParam(':vertrekDatum', $vertrekDatum);
        $stmt->bindParam(':Prijs', $Prijs);

        if ($stmt->execute()) {
            echo "Vlucht succesvol toegevoegd!";
            header("Location: ../index.php");
            exit();
        } else {
            echo "Er is een probleem opgetreden bij het toevoegen van de vlucht.";
        }
    } catch (PDOException $e) {
        echo "Databasefout: " . $e->getMessage();
    }
}
?>
