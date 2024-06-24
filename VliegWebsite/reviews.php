<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php 
include("header.php");
?>
<main>
<form action="postReview.php" method="POST" class="review-form">
            <div class="form-group">
                <label for="mail">E-Mail</label>
                <input type="email" id="mail" name="mail" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="review">Message</label>
                <textarea id="review" name="review" class="form-control" rows="4" placeholder="Write your review"></textarea>
            </div>
            <button type="submit" class="bsubmit">Post Review</button>
        </form>
</main>
<?php 
include("footer.php");
?>
</body>
</html>
