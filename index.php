
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Můj cestovatelsý blog/</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


<?php
    if ($_GET["page"] == "login") {
        include "login.php";
    } elseif ($_GET["page"] == "registration") {
        include "registration.php";
    }elseif ($_GET["page"] == "contact") {
        include "contact.php";
    } elseif ($_GET["page"] == "main") {
        include "main.php";
    } elseif ($_GET["page"] == "places") {
        include "places.php";
    } elseif ($_GET["page"] == "profile") {
        include "profile.php";
    }

?>


</body>
</html>