<?php
include("connection.php");

// SQL-query om alle gegevens uit de sales-tabel op te halen
$sql = "SELECT * FROM sales";

// Bereid de SQL-query voor en voer deze uit
$stmt = $conn->prepare($sql);
$stmt->execute();

// Haal alle resultaten op als een array
$result = $stmt->fetchAll();

if ($result == null) {
    // Als er geen resultaten zijn
    echo "Geen resultaten.";
} else {
    // Loop door elk resultaat en toon de gegevens
    foreach ($result as $key => $value) {
        // Haal de waarden uit het resultaat
        $bestemmingsLandSale = $value['bestemmingsLandSale'] ?? null;
        $bestemmingsStadSale = $value['bestemmingsStadSale'] ?? null;
        $vertrekLandSale = $value['vertrekLandSale'] ?? null;
        $vertrekStadSale = $value['vertrekStadSale'] ?? null;
        $PrijsSale = $value['PrijsSale'] ?? null;
        $idSale = $value['idSale'] ?? null;
        $vertrekDatumSale = $value['vertrekDatumSale'] ?? null;
        $fotoSale = $value['fotoSale'] ?? null;

        // Genereer HTML voor elke reis
        echo '<td>
        <div class="reis">
            <img src="' . $fotoSale . '" alt="Reis Foto" class="reis-foto">
            <div class="reis-details">
                <h2 class="reis-naam">' . $bestemmingsStadSale . ', ' . $bestemmingsLandSale . '</h2>
                <p class="reis-vertrek">Vertrek: ' . $vertrekDatumSale . '</p>
                <p class="reis-prijs">Prijs: €' . $PrijsSale . '</p>
                <form class="reis-form" action="boekreis.php" method="POST">
                    <input type="hidden" name="product_id" value="' . $idSale . '">
                    <input type="hidden" name="prijs" value="' . $PrijsSale . '">
                    <input type="hidden" name="vertrekDat" value="' . $vertrekDatumSale . '">
                    <input type="submit" value="Boek" class="reis-button">
                </form>
            </div>
        </div>
        </td>';

        echo '</tr>';
    }
}
?>
