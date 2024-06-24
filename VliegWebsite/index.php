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
                    <div class="sale-vlucht1" style="background-image: url('assets/img/vlucht1.webp');">
                        <div class="rood-doos">€999</div>
                        <div class="naam-vlucht">
                            <span>Amsterdam, Netherlands</span>
                        </div>
                    </div>
                    <div class="sale-vlucht2" style="background-image: url('assets/img/vlucht2.jpg');">
                        <div class="rood-doos">€999</div>
                        <div class="naam-vlucht">
                            <span>Paris, France</span>
                        </div>
                    </div>
                </div>
                <div class="sale-right">
                    <div class="sale-vlucht3" style="background-image: url('assets/img/slideshow1.jpeg');">
                        <div class="rood-doos">€998</div>
                        <div class="naam-vlucht">
                            <span>Berlin, Germany</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vlucht4-mid">
            <div class="sale-vlucht4" style="background-image: url('assets/img/slideshow1.jpeg');">
                <div class="rood-doos">€799</div>
                <div class="naam-vlucht">
                    <span>Rome, Italy</span>
                </div>
            </div>
        </section>
    </section>
    <?php include("footer.php")?>
    <script src="assets/javascript.js/form.js"></script>
</body>

</html>
