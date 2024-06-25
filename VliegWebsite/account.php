<?php
include('connection.php');
include('Delete.php'); 
include('update.php');
include('createvlucht.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Information</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb">Your Flight Information</h1>
                <?php
                $stmt = $conn->query("SELECT * FROM orderinfo WHERE userID = '" . $_SESSION["userID"] . "'");
                $results = $stmt->fetchAll();
                foreach ($results as $userData): ?>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Vlucht</h3>
                            <p class="card-text">Vlucht ID: <?php echo ($userData['vluchtID']); ?></p>
                            <p class="card-text">vertrek stad: <?php echo ($userData['vertrekStad']); ?></p>
                            <p class="card-text">bestemming Stad: <?php echo ($userData['bestemmingsStad']); ?></p>
                            <p class="card-text">vertrek land: <?php echo ($userData['vertrekLand']); ?></p>
                            <p class="card-text">bestemming Land: <?php echo ($userData['bestemmingsLand']); ?></p>
                            <p class="card-text">reis tijd: <?php echo ($userData['reistijd']); ?></p>
                            <p class="card-text">vertrek datum: <?php echo ($userData['vertrekDatum']); ?></p>
                            <p class="card-text">Prijs: <?php echo ($userData['Prijs']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <form id="logoutForm" action="logUit.php" method="POST">
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
    </main> 
</body>
</html>
