<?php
include "parts/menuOff.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Můj cestovatelsý blog/Kontakt/</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>


<section id="hero">
    <h1 class="pageHeading">Cestovatelský blog</h1>
    <section class="centeredContentWrapper" style="width: 400px">

        <form action="index.php?page=registration" method="post">
            <div class="row">
                <labelclass="labelForm">Jméno:</label>
                <input name ="name" type="name">
            </div>
            <div class="row">
                <label>Email:</label>
                <input name ="email" type="email">
            </div>
            <div class="row">
                <label>Heslo:</label>
                <input name ="password" type="password">
            </div>
            <div class="row">
                <label>Heslo znovu:</label>
                <input name ="passwordConfirm" type="password">
            </div>
            <div class="row">
                <label></label>
                <input type="submit" value="Registrovat">
            </div>
        </form>
</section>
</section>

</body>
</html>
<?php
include "parts/footerOff.php";


include "parts/dBConnect.php";
if ($_POST) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($db, $_POST['passwordConfirm']);

    if (empty($name) || empty($email) || empty($password) || empty($passwordConfirm)) { //prazdne nejake pole ve formulari

        echo "neco neni vyplnene";

    } else {
    if ($password !== $passwordConfirm) { //neshoduji se pass a passConfirm
            die('Password and Confirm password should match!');

    } else {
        $sql = "INSERT INTO user (name, password, email,role) VALUES ('$name', '$password', '$email',2)";
        if (mysqli_query($db, $sql)) {
            echo "Records inserted successfully.";

        } else {
            echo "Error $sql. " . mysqli_error($db);
        }
    }
    }
}
?>
