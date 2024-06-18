
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
            <div class="mySlides fade"></div>
            <div class="mySlides fade"></div>
            <div class="mySlides fade"></div> 
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div> 
      
        <div class="overlay">
            <div class="mooitekst">
                <p>CTV vakantie planner is jouw sleutel tot perfecte vakanties</p>
            </div>
            <div class="formvliegut">
            <form id="rijtje" action="zoekreisPHP.php" method="GET">
                <input name="vertrek" type="text" placeholder="Vertrekpunt">
                <input name="bestemming" type="text" placeholder="Bestemming">
                <input name="verDatum" type="date" placeholder="Vertrek datum">
                <button type="submit">Zoek</button>
            </form>
        </div>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <section id="sale-widht">
            <div class="sale-box">
                <h2>Vakantie Sale</h2>
             </div>
            </id>
            <br><br><br>
            <section class="sale-vlucht">
    <div class="sale-container">
        <div class="sale-left">
            <div class="sale-vlucht1">
                <div class="rood-doos">999</div>
                <div class="naam-vlucht">
                    <span>Amsterdam, Netherlands</span>
                </div>
            </div>
            <div class="sale-vlucht2">
                <div class="rood-doos">999</div>
                <div class="naam-vlucht">
                    <span>Paris, France</span>
                </div>
            </div>
        </div>
        <div class="sale-right">
            <div class="sale-vlucht3">
                <div class="rood-doos">998</div>
                <div class="naam-vlucht">
                    <span>Berlin, Germany</span>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="vlucht4-mid">
    <div class="sale-vlucht4">
        <div class="rood-doos">799</div>
        <div class="naam-vlucht">
            <span>Rome, Italy</span>
        </div>
    </div>
</div>
</div
<?php include ("footer.php"); ?>
</main> 
    <script src="assets/javascript/java.js"></script>
</body>
</html>

