<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="bod">
<?php include ('header.php'); ?>

<main>
    <div class="loginlijn">
        <div class="section" id="loginbak">
            <h2>Login</h2>
            <form id="loginform" method="post" action="login.php">
                <input name="username" type="text" placeholder="Username" required>
                <input name="password" type="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p><a href="#" id="vergeet">Vergeet Password?</a></p>
                <p>Heb je geen account? <a href="#" id="registerLink">Register</a></p>
            </form>
            
        </div>

        <div class="section" id="registerbak">
            <h2>Register</h2>
            <form id="registerform" method="post" action="registreer.php">
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Register</button>
                <p>Je hebt al een account? <a href="#" id="loginLink">Login</a></p>
            </form>
        </div>

        <div class="section" id="paswoordbak">
            <h2>Vergeten Wachtwoord</h2>
            <form id="paswoordvergeet">
                <input type="email" placeholder="Email" required>
                <button type="submit">Submit</button>
                <p><a href="#" id="terugLink">Terug naar Login</a></p>
            </form>
        </div>
    </div>
</main>

<script src="assets/javascript.js/login.js"></script>
</body>
</html>
