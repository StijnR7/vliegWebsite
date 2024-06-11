
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
                           include('reizenZien.php');
                            ?>
                    </tr>
                </table>
            </div>
        </div>
</body>
</html>

