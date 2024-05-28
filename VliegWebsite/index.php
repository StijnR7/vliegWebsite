<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

<form action="registreer.php" method="POST">
    <input name="username"  placeholder="Username" type="text" >
    <input name="email" placeholder="E-mail" type="text"  >
    <input name="password" placeholder="Password" type="password" >
    <button type="submit"></button>


</form>
<form action="login.php" method="POST">
    <input name="username"  placeholder="Username" type="text" >
    <input name="password" placeholder="Password" type="password" >
    <button type="submit"></button>


</form>


</body>
</html>
