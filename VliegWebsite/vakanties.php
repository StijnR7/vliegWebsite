<?php
include ('connection.php');


$sql = "SELECT * FROM vlucht";

$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();



    foreach ($result as $key1) {
     
            $BestemmingsStad = $key1['bestemmingsStad'];
       
            $aankomstStad = $key1['aankomstStad'];
  
            $Prijs = $key1['Prijs'];
      
            $aankomstLand = $key1['aankomstLand'];
      
            $id = $key1['vluchtID'];
        
    

    echo '<td>
 <div class="product-wrapper">
 <div class="product">
 <h2 class="product-name">' . $BestemmingsStad . '</h2>
 <p class="product-oms"> Beschrijving</p>
 <p class="product-price">Prijs: €' . $Prijs . '</p>
 <p class="product-cat">Categorie: categorie</p>
 <form class="product-form" action="bestel.php" method="POST">
 <input type="hidden" name="product_id" value="' . $id . '">
 <input type="submit" value="Toevoegen" class="add-to-cart-btn">
 </form>
 </div>
 </div>
</td>';
}





?>