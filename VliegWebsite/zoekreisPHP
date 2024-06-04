<?php 
include("connection.php");

$bestemming =  $_GET["bestemming"];
$vertrek = $_GET["vertrek"];
$vertrekDat = $_GET["verDatum"];

$sql = "SELECT * FROM vlucht
 WHERE  bestemmingsStad = '$bestemming' AND vertrekStad = '$vertrek'  AND vertrekDatum = '$vertrekDat'
 OR bestemmingsLand = '$bestemming' AND vertrekland = '$vertrek' AND vertrekDatum = '$vertrekDat' ";

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

echo '
  

<p> Land: ' . $bestemmingsLand .'</p>
<p> Stad: ' . $bestemmingsStad .'</p>
<p> Vertrek Stad: ' . $vertrekStad .'</p>
<p> Vertrek Land: ' . $vertrekLand .'</p>
<p> Prijs: ' . $Prijs  .'</p>
<form action="boekreis.php" method="POST">
  <input type="hidden" name="vluchtID" value="' . $vluchtID . '">
  <button type="submit"> Boek</button>

</form>




  ';
}}

?>


