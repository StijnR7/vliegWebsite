<?php 
include("connection.php");


$sql = "SELECT * FROM vlucht";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
    
if($result == null){
echo "Geen resultaten.";


}   
else{
  foreach($result as $key => $value) {
    $bestemmingsLand = $value['bestemmingsLand'] ?? null;
    $bestemmingsStad = $value['bestemmingsStad'] ?? null;
    $vertrekLand = $value['vertrekLand'] ?? null;
    $vertrekStad = $value['vertrekStad'] ?? null;
    $Prijs = $value['Prijs'] ?? null;
    $vluchtID = $value['vluchtID'] ?? null;
    $vertrekDatum = $value['vertrekDatum'] ?? null;
    $foto = $value['foto'] ?? null;


echo '<td>
<div class="reis">
    <img src="' . $foto .  '" alt="Reis Foto" class="reis-foto">
    <div class="reis-details">
        <h2 class="reis-naam">'. $bestemmingsStad .', '. $bestemmingsLand .'</h2>
        <p class="reis-vertrek">Vertrek: '. $vertrekDatum .'</p>
        <p class="reis-prijs">Prijs: €'. $Prijs .'</p>
        <form class="reis-form" action="boekreis.php" method="POST">
            <input type="hidden" name="product_id" value="'. $vluchtID . '">
            <input type="hidden" name="prijs" value="'. $Prijs . '">
            <input type="hidden" name="vertrekDat" value="'. $vertrekDatum . '">
            <input type="submit" value="Boek" class="reis-button">
        </form>
    </div>
</div>
</td>';

echo '</tr>';
}}

?>


