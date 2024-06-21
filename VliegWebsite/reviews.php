<?php
include ("header.php");
?>
<main>
    <form action="postReview.php" method="POST">
        <input type="email" name="mail" placeholder="E-Mail">
        <input type="text" name="review" placeholder="Message">
        <button type="submit"
            style="background-color: #FFA500; color: white; padding: 8px 16px; border-radius: 5px;">Post review</button>
    </form>
</main>