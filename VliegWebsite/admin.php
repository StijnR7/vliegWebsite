<?php include ('Delete.php');
include ('update.php');
include ('createvlucht.php');


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include ('header.php'); 
    if($_SESSION["permissions"] != 1){
        header("Location: index.php");


    }
    ?>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <h2>Create product</h2>
    <section class="for-vervang">
        <form action="createvlucht.php" method="post">
            <label for="bestemmingsStad">bestemmingsStad:</label>
            <input type="text" id="bestemmingsStad" name="bestemmingsStad">
            <label for="vertrekStad">vertrekStad:</label>
            <input type="text" id="vertrekStad" name="vertrekStad">
            <label for="bestemmingsLand">bestemmingsLand:</label>
            <input type="text" id="bestemmingsLand" name="bestemmingsLand">
            <label for="vertrekLand">vertrekLand:</label>
            <input type="text" id="vertrekLand" name="vertrekLand">
            <label for="reistijd">reistijd</label>
            <input type="number" id="reistijd" name="reistijd">
            <label for="vertrekDatum">vertrekDatum</label>
            <input type="date" id="vertrekDatum" name="vertrekDatum">
            <label for="Prijs">Prijs</label>
            <input type="number" id="Prijs" name="Prijs">
            <label for="Prijs">Foto</label>
            <input type="text" id="Foto" name="Foto">
            <input type="submit" name="register" value="Voeg toe">
    </section>
    </form><br><br>

    <h2>Vlucht Beheer</h2>
    <table>
        <thead>
            <tr>
                <th>vluchtID</th>
                <th>bestemmingsStad</th>
                <th>vertrekStad</th>
                <th>bestemmingsLand</th>
                <th>vertrekLand</th>
                <th>reistijd</th>
                <th>vertrekDatum</th>
                <th>Prijs</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $conn->query("SELECT * FROM vlucht");
            $vluchten = $stmt->fetchAll();
            foreach ($vluchten as $vlucht): ?>
                <tr>
                    <form action="update.php" method="post">
                        <td><input type="text" name="vluchtID" value="<?php echo ($vlucht['vluchtID']); ?>"></td>
                        <td><input type="text" name="bestemmingsStad" value="<?php echo ($vlucht['bestemmingsStad']); ?>">
                        </td>
                        <td><input type="text" name="vertrekStad" value="<?php echo ($vlucht['vertrekStad']); ?>"></td>
                        <td><input type="text" name="bestemmingsLand" value="<?php echo ($vlucht['bestemmingsLand']); ?>">
                        </td>
                        <td><input type="text" name="vertrekLand" value="<?php echo ($vlucht['vertrekLand']); ?>"></td>
                        <td><input type="number" name="reistijd" value="<?php echo ($vlucht['reistijd']); ?>"></td>
                        <td><input type="date" name="vertrekDatum" value="<?php echo ($vlucht['vertrekDatum']); ?>"></td>
                        <td><input type="number" name="Prijs" value="<?php echo ($vlucht['Prijs']); ?>"></td>
                        <td><input type="submit" name="Update" value="update"></td>
                    </form>
                    <form action="Delete.php" method="post">
                        <input type="hidden" name="vluchtID" value="<?php echo ($vlucht['vluchtID']); ?>">
                        <td><input type="submit" name="Delete" value="Delete"></td>
                    </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form id="logUitKnop" action="logUit.php">
        <button type="submit"></button>

    </form>

</body>

</html>