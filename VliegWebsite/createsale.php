<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verkoopformulier</title>
</head>
<body>
    <h1>Verkoopformulier</h1>
    <form action="salecreate.php" method="POST" enctype="multipart/form-data">
        <label for="bestemmingsLandSale">Bestemmingsland:</label>
        <input type="text" id="bestemmingsLandSale" name="bestemmingsLandSale" required><br><br>

        <label for="bestemmingsStadSale">Bestemmingsstad:</label>
        <input type="text" id="bestemmingsStadSale" name="bestemmingsStadSale" required><br><br>

        <label for="vertrekLandSale">Vertrekland:</label>
        <input type="text" id="vertrekLandSale" name="vertrekLandSale" required><br><br>

        <label for="vertrekStadSale">Vertrekstad:</label>
        <input type="text" id="vertrekStadSale" name="vertrekStadSale" required><br><br>

        <label for="PrijsSale">Prijs:</label>
        <input type="number" id="PrijsSale" name="PrijsSale" required><br><br>

        <label for="vertrekDatumSale">Vertrekdatum:</label>
        <input type="date" id="vertrekDatumSale" name="vertrekDatumSale" required><br><br>

        <label for="reistijdSale">Reistijd:</label>
        <input type="text" id="reistijdSale" name="reistijdSale" required><br><br>

        <label for="fotoSale">Foto:</label>
        <input type="file" id="fotoSale" name="fotoSale" accept="image/*" required><br><br>

        <button type="submit">Versturen</button>
    </form>
</body>
</html>