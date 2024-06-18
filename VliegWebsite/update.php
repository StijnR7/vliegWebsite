<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requiredKeys = ['vluchtID', 'bestemmingsStad', 'vertrekStad', 'bestemmingsLand', 'vertrekLand', 'reistijd', 'vertrekDatum', 'Prijs'];
    $missingKeys = array_diff($requiredKeys, array_keys($_POST));

    if (empty($missingKeys)) {
        $vluchtID = $_POST['vluchtID'];
        $bestemmingsStad = $_POST['bestemmingsStad'];
        $vertrekStad = $_POST['vertrekStad'];
        $bestemmingsLand = $_POST['bestemmingsLand'];
        $vertrekLand = $_POST['vertrekLand'];
        $reistijd = $_POST['reistijd'];
        $vertrekDatum = $_POST['vertrekDatum'];
        $Prijs = $_POST['Prijs'];

        $sql = "UPDATE vlucht SET bestemmingsStad = :bestemmingsStad, vertrekStad = :vertrekStad, bestemmingsLand = :bestemmingsLand, vertrekLand = :vertrekLand, reistijd = :reistijd, vertrekDatum = :vertrekDatum, Prijs = :Prijs WHERE vluchtID = :vluchtID";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vluchtID', $vluchtID);
        $stmt->bindParam(':bestemmingsStad', $bestemmingsStad);
        $stmt->bindParam(':vertrekStad', $vertrekStad);
        $stmt->bindParam(':bestemmingsLand', $bestemmingsLand);
        $stmt->bindParam(':vertrekLand', $vertrekLand);
        $stmt->bindParam(':reistijd', $reistijd);
        $stmt->bindParam(':vertrekDatum', $verstrekDatum);
        $stmt->bindParam(':Prijs', $Prijs);
       

        if ($stmt->execute()) {
            echo "Vlucht succesvol geüpdatet.";
        } else {
            echo "Error updating vlucht: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Missing required fields: " . implode(', ', $missingKeys);
    }
}

$stmt = $conn->query("SELECT * FROM vlucht");
$vluchten = $stmt->fetchAll();

?>