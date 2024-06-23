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
    <main class="containermt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Your Flight Information</h1>
                <?php
                 $stmt = $conn->prepare("SELECT * FROM orderinfo WHERE userID = :userID");
                 $stmt->bindParam(':userID', $_SESSION['userID']);
                 $stmt->execute();
                 
                 $orderResults = $stmt->fetchAll();
             
                 foreach ($orderResults as $orderData):
                     // Fetch flight details using the vluchtID from the order information
                     $stmt2 = $conn->prepare("SELECT * FROM vlucht WHERE vluchtID = :vluchtID");
                     $stmt2->bindParam(':vluchtID', $orderData['vluchtID']);
                     $stmt2->execute();
                     
                     $flightResults = $stmt2->fetchAll();
             
                     foreach ($flightResults as $flightData) :
                ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="card-title">Vlucht</h3>
                            <p class="card-text">Vlucht ID: <?php echo ($flightData['vluchtID']); ?></p>
                            <p class="card-text">vertrek stad: <?php echo ($flightData['vertrekStad']); ?></p>
                            <p class="card-text">bestemming Stad: <?php echo ($flightData['bestemmingsStad']); ?></p>
                            <p class="card-text">vertrek land: <?php echo ($flightData['vertrekLand']); ?></p>
                            <p class="card-text">bestemming Land: <?php echo ($flightData['bestemmingsLand']); ?></p>
                            <p class="card-text">reis tijd: <?php echo ($flightData['reistijd']); ?></p>
                            <p class="card-text">vertrek datum: <?php echo ($flightData['vertrekDatum']); ?></p>
                            <p class="card-text">Prijs: <?php echo ($flightData['Prijs']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endforeach; ?>
               
                <form id="logoutForm" action="logUit.php" method="POST">
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
    </main> 
</body>
</html>