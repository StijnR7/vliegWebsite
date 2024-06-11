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
foreach($result AS $key => $value){
foreach($value AS $key1 => $value1){

if ($key1 == 'bestemmingsLand'){
  $bestemmingsLand = $value1;
}
elseif ($key1 == 'bestemmingsStad'){
  $bestemmingsStad = $value1;
}
elseif ($key1 == 'vertrekLand'){
  $vertrekLand = $value1;
}
elseif ($key1 == 'vertrekStad'){
  $vertrekStad = $value1;
}
elseif ($key1 == 'Prijs'){
  $Prijs = $value1;
}
elseif ($key1 == 'vluchtID'){
  $vluchtID = $value1;
}

}

echo '<td>
<div class="product-wrapper">
<div class="product">
<h2 class="product-name">'. $bestemmingsStad .'</h2>
<p class="product-price">Prijs: €'. $Prijs .'</p>
<form class="product-form" action="boekreis.php" method="POST">
<input type="hidden" name="product_id" value="'. $vluchtID . '">
<input type="submit" value="Boek" class="add-to-cart-btn">
</form>
</div>
</div>
</td>'; 
}}

?>


