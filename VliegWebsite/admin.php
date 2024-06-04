<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Admin Pagina</title>
    <link rel="stylesheet" href="css/styles.css">
=======
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
>>>>>>> be46b9b64106d4e07fb175e7e4fb30fddfa29b1f
</head>
<body>
    <?php include ('header.php'); ?>
    
    <main>
        <div id="createbak" class="content-section active">
            <div class="contact-bak">
                <h2>Nieuw Product Aanmaken</h2>
                <form id="createForm">
                    <div class="veldje">
                        <label for="productName">Product Naam</label>
                        <input type="text" id="productName" placeholder="Product Naam" required>
                    </div>
                    <div class="veldje">
                        <label for="price">Prijs</label>
                        <input type="number" id="price" placeholder="Prijs" required>
                    </div>
                    <div class="veldje">
                        <label for="description">Beschrijving</label>
                        <textarea id="description" placeholder="Beschrijving"></textarea>
                    </div>
                    <button type="submit" class="knoppie">Aanmaken</button>
                </form>
                <p><a href="#" id="updateLink">Schakel over naar Product Bijwerken</a> | <a href="#" id="deleteLink">Schakel over naar Product Verwijderen</a></p>

                <table class="product-table">
                    <tbody>
                        <?php
                            // Loop door de producten en toon elk product
                            foreach ($producten as $product) {
                                echo '<tr>';
                                echo '<td>';
                                echo '<div class="product-wrapper">';
                                echo '<div class="product">';
                                echo '<h2 class="product-name">'.$product['BestemmingsStad'].'</h2>';
                                echo '<p class="product-oms">'.$product['Beschrijving'].'</p>';
                                echo '<p class="product-price">Prijs: €'.$product['Prijs'].'</p>';
                                echo '<p class="product-cat">Categorie: '.$product['Categorie'].'</p>';
                                echo '<form class="product-form" action="bestel.php" method="POST">';
                                echo '<input type="hidden" name="product_id" value="'.$product['id'].'">';
                                echo '<input type="submit" value="update" class="add-to-cart-btn">';
                                echo '</form>';
                                echo '</div>';
                                echo '</div>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- De overige secties voor bijwerken en verwijderen van producten worden hier geplaatst -->

    </main>

    <script src="assets/javascript.js/admin.js"></script>
</body>
</html>
