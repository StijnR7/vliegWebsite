<?php 
    include('connection.php');
    session_start();
    $vluchtID = $_POST["vluchtID"];

    // Get the userID from the session
    $userID = $_SESSION["userID"];
    

        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO orderinfo(vluchtID, userID) VALUES (:vluchtID, :userID)";
        $stmt = $conn->prepare($sql);
    
        // Bind the actual values to the placeholders
        $stmt->bindParam(':vluchtID', $vluchtID);
        $stmt->bindParam(':userID', $userID);
    
        // Execute the statement
        $stmt->execute();
    
?>