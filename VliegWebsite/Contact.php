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
    <div class="contact-bak">
        <h2>Contacteer Ons</h2>
        <form>
            <div class="veldje">
                <label for="naam">Naam</label>
                <input type="text" id="naam" name="naam" required>
            </div>
            <div class="veldje">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="veldje">
                <label for="onderwerp">Onderwerp</label>
                <input type="text" id="onderwerp" name="onderwerp" required>
            </div>
            <div class="veldje">
                <label for="bericht">Bericht</label>
                <textarea id="bericht" name="bericht" required></textarea>
            </div>
            <button type="submit" class="knoppie">Verstuur</button>
        </form>
    </div>
</body>
</html>
