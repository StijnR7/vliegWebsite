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
           
            <div class="mySlides fade" style="background-image: url('assets/img/Screenshot\ 2024-05-23\ 135248.png');"></div>
            <div class="mySlides fade" style="background-image: url('assets/img/images\ \(1\).jpeg');"></div>
            <div class="mySlides fade" style="background-image: url('assets/img/images.jpeg');"></div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div> 
      
        <div class="overlay">
            <div class="mooitekst">
                <p>CTV vakantie planner is jouw sleutel tot perfecte vakanties</p>
            </div>
            <div class="formvliegut">
                <form id="rijtje" action="reiszoeken.php" method="GET">
                    <input name="vertrek" type="text" placeholder="Vertrekpunt">
                    <input name="bestemming" type="text" placeholder="Bestemming">
                    <input name="verDatum" type="date" placeholder="Vertrek datum">
                    <button type="submit">Zoek</button>
                </form>
            </div>
            <div class="product-container">
                <table class="product-table">
                    <tr>
                     

                              <?php 
                              include('vakanties.php');
                              ?>

                    </tr>
                </table>
            </div>
        </div>
    </main>
    <script src="assets/javascript/java.js"></script>
</body>
</html>
