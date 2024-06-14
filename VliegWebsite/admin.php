<?php include('Delete.php'); 
include('update.php');
include('createvlucht.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php include('header.php'); ?>
</head>
<body>
<h2>create product</h2>
<form action="vluchtCreate.php" method="post">
    <label for="bestemmingsStad">bestemmingsStad:</label>
    <input type="text" id="bestemmingsStad" name="bestemmingsStad">
    <label for="vertrekStad">vertrekStad:</label>
    <input type="text" id="vertrekStad" name="vertrekStad">
    <label for="bestemmingsLand">bestemmingsLand:</label>
    <input type="text" id="bestemmingsStad" name="bestemmingsLand">
    <label for="vertrekLand">vertrekLand:</label>
    <input type="text" id="vertrekLand" name="vertrekLand">
    <label for="reistijd">reistijd</label>
    <input type="number" id="reistijd" name="reistijd">
    <label for="vertrekDatum">vertrekDatum</label>
    <input type="date" id="vertrekDatum" name="vertrekDatum">
    <label for="Prijs">Prijs</label>
    <input type="number" id="Prijs" name="Prijs">
    <input type="submit" name="register" value="Voeg toe">
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
                <td><?php echo htmlspecialchars($vlucht['vluchtID']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['bestemmingsStad']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['vertrekStad']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['bestemmingsLand']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['vertrekLand']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['reistijd']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['vertrekDatum']); ?></td>
                <td><?php echo htmlspecialchars($vlucht['Prijs']); ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input type="hidden" name="vluchtID" value="<?php echo htmlspecialchars($vlucht['vluchtID']); ?>">>
                            <input type="hidden" name="vluchtID" value="<?php echo htmlspecialchars($vlucht['vluchtID']); ?>">
                            <input type="text" name="bestemmingsStad" value="<?php echo htmlspecialchars($vlucht['bestemmingsStad']); ?>">
                            <input type="text" name="vertrekStad" value="<?php echo htmlspecialchars ($vlucht['vertrekStad']); ?>">
                            <input type="text" name="bestemmingsLand" value="<?php echo htmlspecialchars($vlucht['bestemmingsLand']); ?>">
                            <input type="text" name="vertrekLand" value="<?php echo htmlspecialchars ($vlucht['vertrekLand']); ?>">
                            <input type="text" name="reistijd" value="<?php echo $vlucht['reistijd']; ?>">
                            <input type="text" name="vertrekDatum" value="<?php echo htmlspecialchars ($vlucht['vertrekDatum']); ?>">
                            <input type="text" name="Prijs" value="<?php echo htmlspecialchars ($vlucht['Prijs']); ?>">
                            <input type="submit" value="Update">
                    </form>
                </td>
                <td>
                    <form action="Delete.php" method="post">
                        <input type="hidden" name="vluchtID" value="<?php echo htmlspecialchars($vlucht['vluchtID']); ?>">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>