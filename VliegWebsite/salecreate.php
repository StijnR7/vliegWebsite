<?php
include ('connection.php');


// Verzamel gegevens uit het formulier
$bestemmingsLandSale = $_POST['bestemmingsLandSale'];
$bestemmingsStadSale = $_POST['bestemmingsStadSale'];
$vertrekLandSale = $_POST['vertrekLandSale'];
$vertrekStadSale = $_POST['vertrekStadSale'];
$PrijsSale = $_POST['PrijsSale'];
$vertrekDatumSale = $_POST['vertrekDatumSale'];
$reistijdSale = $_POST['reistijdSale'];
$fotoSale = $_FILES['fotoSale'];

// Verwerk de geüploade foto
$fotoNaam = basename($fotoSale['name']);
$fotoPad = "uploads/" . $fotoNaam;

// Controleer of de uploads-map bestaat en maak deze indien nodig aan
if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

if (move_uploaded_file($fotoSale['tmp_name'], $fotoPad)) {
    // SQL-query om de gegevens in de database in te voegen
    $sql = "INSERT INTO sales (bestemmingsLandSale, bestemmingsStadSale, vertrekLandSale, vertrekStadSale, PrijsSale, vertrekDatumSale, reistijdSale, fotoSale)
    VALUES (:bestemmingsLandSale, :bestemmingsStadSale, :vertrekLandSale, :vertrekStadSale, :PrijsSale, :vertrekDatumSale, :reistijdSale, :fotoSale)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':bestemmingsLandSale', $bestemmingsLandSale);
    $stmt->bindParam(':bestemmingsStadSale', $bestemmingsStadSale);
    $stmt->bindParam(':vertrekLandSale', $vertrekLandSale);
    $stmt->bindParam(':vertrekStadSale', $vertrekStadSale);
    $stmt->bindParam(':PrijsSale', $PrijsSale);
    $stmt->bindParam(':vertrekDatumSale', $vertrekDatumSale);
    $stmt->bindParam(':reistijdSale', $reistijdSale);
    $stmt->bindParam(':fotoSale', $fotoPad);

    if ($stmt->execute()) {
        echo "Gegevens succesvol opgeslagen.";
    } else {
        echo "Er is een fout opgetreden bij het opslaan van de gegevens.";
    }
} else {
    echo "Fout bij het uploaden van de foto.";
}

// Sluit de verbinding door de PDO-instantie op null te zetten
$conn = null;
?>