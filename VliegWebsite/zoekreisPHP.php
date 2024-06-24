<?php
include ("connection.php");
include ("header.php");
$bestemming = $_GET["bestemming"];
$vertrek = $_GET["vertrek"];
$vertrekDat = $_GET["verDatum"];

if(isset($_GET["bestemming"]) && isset($_GET["vertrek"]) && isset($_GET["verDatum"])){
$sql = "SELECT * FROM vlucht
 WHERE  bestemmingsStad = '$bestemming' AND vertrekStad = '$vertrek'  AND vertrekDatum = '$vertrekDat'
 OR bestemmingsLand = '$bestemming' AND vertrekland = '$vertrek' AND vertrekDatum = '$vertrekDat' ";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();

if ($result == null) {
  echo "Geen resultaten.";


} else {
  foreach ($result as $key1) {
     
    $bestemmingsStad = $key1['bestemmingsStad'];
    $bestemmingsLand = $key1['bestemmingsLand'];

   

    $Prijs = $key1['Prijs'];

   $vertrekDatum = $key1['vertrekDatum'];
    $foto = $key1['foto'];
    $vluchtID = $key1['vluchtID'];


    echo '
    <div class="formvliegut"></div>
    <div class="product-container">
        <table class="product-table">
    <td>
<div class="reis">
    <img src="' . $foto . '" alt="Reis Foto" class="reis-foto">
    <div class="reis-details">
        <h2 class="reis-naam">' . $bestemmingsStad . ', ' . $bestemmingsLand . '</h2>
        <p class="reis-vertrek">Vertrek: ' . $vertrekDatum . '</p>
        <p class="reis-prijs">Prijs: €' . $Prijs . '</p>
        <form class="reis-form" action="boekreis.php" method="POST">
            <input type="hidden" name="product_id" value="' . $vluchtID . '">
            <input type="hidden" name="prijs" value="' . $Prijs . '">
            <input type="hidden" name="vertrekDat" value="' . $vertrekDatum . '">
            <input type="submit" value="Boek" class="reis-button">
        </form>
    </div>
</div>
</td>    </table>
    </div>';echo '</tr>';
  }
}}
else{
header('Location: index.php');

}

?>
