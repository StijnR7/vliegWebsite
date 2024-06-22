<?php session_start(); ?>
<div class="bod">
    <header>
        <nav>
            <div class="logo"><a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a></div>
            <div class="bar">
                <h1><a href="index.php">Home</a></h1>
                <h1><a href="overOns.php">Over ons</a></h1>
                <h1><a href="boek.php">Reizen</a></h1>
                <h1><a href="Contact.php">Contact</a></h1>
            </div>
            <div class="login">
                <a id="loginFoto" href="<?php 
                    if(isset($_SESSION["permissions"])) {
                        if($_SESSION["permissions"] == 1) {
                            echo "admin.php";
                        } else {
                            echo "account.php";
                        }
                    } else {
                        echo "inlog.php";
                    }
                ?>">
                    <img src="assets/img/login.png" alt="Login">
                </a>
            </div>
        </nav>
    </header>
</div>
