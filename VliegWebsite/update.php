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

        $sql = "UPDATE vlucht SET bestemmingsStad = ?, vertrekStad = ?, bestemmingsLand = ?, vertrekLand = ?, reistijd = ?, vertrekDatum = ?, Prijs = ? WHERE vluchtID = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $bestemmingsStad);
        $stmt->bindParam(2, $vertrekStad);
        $stmt->bindParam(3, $bestemmingsLand);
        $stmt->bindParam(4, $vertrekLand);
        $stmt->bindParam(5, $reistijd);
        $stmt->bindParam(6, $verstrekDatum);
        $stmt->bindParam(7, $Prijs);
        $stmt->bindParam(8, $vluchtID);

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