<?php 
 include('connection.php');


$sql = "SELECT * FROM vlucht";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
   foreach($result AS $key => $value){
    foreach($value AS $key1 => $value1){
    if($key1 == 'bestemmingsStad'){
        $BestemmingsStad = $value1;
    }
    elseif ($key1 == 'aankomstStad'){
        $aankomstStad = $value1;
    }
    elseif ($key1 == 'Prijs'){
        $Prijs = $value1;
    }
    elseif ($key1 == 'aankomstLand'){
        $aankomstLand = $value1;
    }
    elseif ($key1 == 'vluchtID'){
        $id = $value1;
    }
    }
    
echo '<td>
 <div class="product-wrapper">
 <div class="product">
 <h2 class="product-name">'.$BestemmingsStad .'</h2>
 <p class="product-oms"> Beschrijving</p>
 <p class="product-price">Prijs: €'. $Prijs .'</p>
 <p class="product-cat">Categorie: categorie</p>
 <form class="product-form" action="bestel.php" method="POST">
 <input type="hidden" name="product_id" value="'. $id . '">
 <input type="submit" value="Toevoegen" class="add-to-cart-btn">
 </form>
 </div>
 </div>
</td>';  
    }





?>