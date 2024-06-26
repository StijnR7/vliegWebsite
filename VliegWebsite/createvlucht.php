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
    $Foto = "assets/img/" .  $_POST['Foto'];


        $stmt = $conn->prepare("INSERT INTO vlucht (bestemmingsStad, vertrekStad, bestemmingsLand, vertrekLand, reistijd, vertrekDatum, Prijs, foto) VALUES (:bestemmingsStad, :vertrekStad, :bestemmingsLand, :vertrekLand, :reistijd, :vertrekDatum, :Prijs, :Foto)");
        
        $stmt->bindParam(':bestemmingsStad', $bestemmingsStad);
        $stmt->bindParam(':vertrekStad', $vertrekStad);
        $stmt->bindParam(':bestemmingsLand', $bestemmingsLand);
        $stmt->bindParam(':vertrekLand', $vertrekLand);
        $stmt->bindParam(':reistijd', $reistijd);
        $stmt->bindParam(':vertrekDatum', $vertrekDatum);
        $stmt->bindParam(':Prijs', $Prijs);
        $stmt->bindParam(':Foto', $Foto);
        $stmt->execute();}
       

?>
