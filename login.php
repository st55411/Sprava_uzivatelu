<?php
include "parts/menuOff.php";
?>

<?php
include "parts/dBConnect.php";
/*login.php*/
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['email']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT user_id FROM user WHERE email = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        // session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: index.php?page=main");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Můj cestovatelsý blog/login</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<html>

   <body>
<section id="hero">
    <h1 class="pageHeading">Cestovatelský blog</h1>
    <section class="centeredContentWrapper" style="width: 400px">

        <form action="" method="post">

            <div class="row">
                <label>Email:</label>
                <input type = "text" name = "email" />
            </div>
            <div class="row">
                <label>Heslo:</label>
                <input type = "password" name = "password"  />
            </div>
            <div class="row">
                <label></label>
                <input type="submit" value="Přihlásit se">
            </div>
        </form>

    </section>
</section>

   </body>
</html>

<?php
include "parts/footerOff.php";
?>




