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
    <div class="slideshow-container">
        <img src="assets/img/homepage.webp" alt="foto">
    </div>
    <section id="overlay">
        <div id="mooitekst">
            <p>CTV vakantie planner is jouw sleutel tot perfecte vakanties</p>
        </div>
        <div id="formvliegut">
            <form id="rijtje" action="zoekreisPHP.php" method="GET">
                <input name="vertrek" type="text" placeholder="Vertrekpunt">
                <input name="bestemming" type="text" placeholder="Bestemming">
                <input name="verDatum" type="date" placeholder="Vertrek datum">
                <button type="submit">Zoek</button>
            </form>
        </div>
        <section id="sale-width">
            <div id="sale-box">
                <h2>Vakantie Sale</h2>
            </div>
        </section>
        <section id="sale-vlucht">
        <div class="sale-container">
    <div class="sale-left">
        <?php
        
        include("connection.php");

        $sql = "SELECT * FROM sales";

        
        $stmt = $conn->prepare($sql);
        $stmt->execute();

      
        $result = $stmt->fetchAll();

       
        $count = 0;
        foreach ($result as $key => $value) {
            if ($count , 3) {
                
                $bestemmingsLandSale = $value['bestemmingsLandSale'] ?? null;
                $bestemmingsStadSale = $value['bestemmingsStadSale'] ?? null;
                $PrijsSale = $value['PrijsSale'] ?? null;
                $fotoSale = $value['fotoSale'] ?? null;

                echo '<form action="boeksale.php" method="post">
                        <input type="hidden" name="product_id" value="' . $value['idSale'] . '">
                        <input type="hidden" name="prijs" value="' . $PrijsSale . '">
                        <input type="hidden" name="vertrekDat" value="' . date('Y-m-d') . '">
                        <button type="submit" class="sale-vlucht' . ($count + 1) . '" style="background-image: url(\'' . $fotoSale . '\');">
                            <div class="rood-doos">€' . $PrijsSale . '</div>
                            <div class="naam-vlucht">
                                <span>' . $bestemmingsStadSale . ', ' . $bestemmingsLandSale . '</span>
                            </div>
                        </button>
                      </form>';

                if ($count == 1) {
                    echo '</div><div class="sale-right">';
                }

               
                $count++;
            }
        }
        ?>
    </div>
</div>
</section>

<?php

if (isset($result[3])) {
    
    $value = $result[3];
    $bestemmingsLandSale = $value['bestemmingsLandSale'] ?? null;
    $bestemmingsStadSale = $value['bestemmingsStadSale'] ?? null;
    $PrijsSale = $value['PrijsSale'] ?? null;
    $fotoSale = $value['fotoSale'] ?? null;

    
    echo '<section class="vlucht4-mid">
            <form action="boeksale.php" method="post">
                <input type="hidden" name="product_id" value="' . $value['idSale'] . '">
                <input type="hidden" name="prijs" value="' . $PrijsSale . '">
                <input type="hidden" name="vertrekDat" value="' . date('Y-m-d') . '">
                <button type="submit" class="sale-vlucht4" style="background-image: url(\'' . $fotoSale . '\');">
                    <div class="rood-doos">€' . $PrijsSale . '</div>
                    <div class="naam-vlucht">
                        <span>' . $bestemmingsStadSale . ', ' . $bestemmingsLandSale . '</span>
                    </div>
                </button>
            </form>
          </section>';
}
?>
</section>
    <?php include("footer.php")?>
    <script src="assets/javascript.js/form.js"></script>
</body>

</html>
