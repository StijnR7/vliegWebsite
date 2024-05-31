<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade" style="background-image: url('assets/img/Screenshot 2024-05-23 135248.png');"></div>
            <div class="mySlides fade" style="background-image: url('assets/img/images (1).jpeg');"></div>
            <div class="mySlides fade" style="background-image: url('assets/img/images.jpeg');"></div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div> 
      
        <div class="overlay">
            <div class="mooitekst">
                <p>CTV vakantie planner is jouw sleutel tot perfecte vakanties</p>
            </div>
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
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <script src="assets/javascript/java.js"></script>
</body>
</html>
