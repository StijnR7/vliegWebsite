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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include('header.php'); 
    
    ?>
    <main>
    <?php
            $stmt = $conn->query("SELECT * FROM orderinfo WHERE userID = '" . $_SESSION["userID"] . "'");

            $results = $stmt->fetchAll();
            
           
            
            foreach ($results as $userData): ?>
               <tr>
                <td>Vlucht ID: <?php echo ($userData['vluchtID'])?></td>

               </tr>
            <?php endforeach; ?>

            <form id="logUitKnop" action="logUit.php">
                <button type="submit"></button>

            </form>
    </main> 
    <script src="assets/javascript/java.js"></script>

</body>

</html>