<?php
include "parts/connectControl.php";
include "parts/menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Můj cestovatelsý blog/Kontakt/</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<section id="hero">
    <h1 class="pageHeading">Cestovatelský blog</h1>
<section class="centeredContentWrapper" style="width: 400px">

    <form action="contact.php">
        <div class="row">
            <label>Jméno:</label>
            <input type="text">
        </div>
        <div class="row">
            <label>Email:</label>
            <input type="email">
        </div>
        <div class="row">
            <label>Zpráva:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="row">
            <label></label>
            <input type="submit" value="Odeslat zprávu">
        </div>
    </form>

</section>
    </section>

</body>
</html>

<?php
include "parts/footer.php";
?>

