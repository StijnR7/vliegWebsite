<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacteer Ons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include ('header.php'); ?>
    <div class="contact-form">
        <h2>Contacteer Ons</h2>
<<<<<<< Updated upstream
        <form action="contactPHP.php" method="POST">
=======
        <form>
>>>>>>> Stashed changes
            <div class="contact-veld">
                <label for="naam">Naam</label>
                <input type="text" id="naam" name="user" required>
            </div>
            <div class="contact-veld">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="contact-veld">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" id="onderwerp" name="onderwerp" required>
            </div>
            <div class="contact-veld">
                <label for="bericht">Bericht</label>
                <textarea id="bericht" name="bericht" required></textarea>
            </div>
            <button type="submit" class="knoppie">Verstuur</button>
        </form>
    </div>
    <div class="blue-lines">
        <div class="blue-line">0612345678</div>
        <div class="blue-line">mail</div>
        <div class="blue-line">locatie</div>
        <div class="blue-line">?</div>
    </div>
</body>
</html>
