
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include ('header.php'); ?>
<div class="formvliegut">
                <form id="rijtje">
                    <input type="text" placeholder="Vertrekpunt">
                    <input type="text" placeholder="Bestemming">
                    <input type="date" placeholder="Vertrek datum">
                    <input type="date" placeholder="Aankomst">
                    <button type="submit">Zoek</button>
                </form>
            </div>
            <div class="product-container">
                <table class="product-table">
                    <tr>
                        <?php
                            echo '<td>';
                            echo '<div class="product-wrapper">';
                            echo '<div class="product">';
                            echo '<h2 class="product-name">'. $product['productnaam'] .'</h2>';
                            echo '<p class="product-oms">'. $product['omschrijving'] .'</p>';
                            echo '<p class="product-price">Prijs: €'. $product['prijs'] .'</p>';
                            echo '<p class="product-cat">Categorie: '. $product['categorie'] .'</p>';
                            echo '<form class="product-form" action="bestel.php" method="POST">';
                            echo '<input type="hidden" name="product_id" value="'. $product['id'] . '">';
                            echo '<input type="number" name="quantity" value="1" min="1" class="product-quantity">';
                            echo '<input type="submit" value="Toevoegen" class="add-to-cart-btn">';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo '</td>';   
                            ?>
                    </tr>
                </table>
            </div>
        </div>
</body>
</html>

