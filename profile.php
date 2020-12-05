<?php
include "parts/connectControl.php";
include "parts/menu.php";


$sql = "select * from user where email = '$login_session'";
$result = mysqli_query($db, $sql);

$row = $result->fetch_assoc();

if ($_POST) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($name) || empty($email) || empty($password)) { //prazdne nejake pole ve formulari

        echo "neco neni vyplnene";

    } else {

        $sql = "UPDATE user SET name= '$name', password= '$password', email= '$email' WHERE email='$login_session'";
        if (mysqli_query($db, $sql)) {
            echo "Records updated successfully.";

        }
    }
}

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


        <form action="" method="post">
            <h1 style="font-size: x-large">Můj profil</h1>
            <div class="row">
                <label>Jmeno:</label>
                <input type = "text" name = "name" value="<?php echo $row['name']?>"  />
            </div>
            <div class="row">
                <label>Email:</label>
                <input type = "text" name = "email" value="<?php echo $row['email']?>" />
            </div>
            <div class="row">
                <label>Heslo:</label>
                <input type = "text" name = "password" value="<?php echo $row['password']?>"  />
            </div>

            <div class="row">
                <label></label>
                <input type="submit" value="Upravit">
            </div>
        </form>




    </section>
</section>
</body>
</html>

<?php
include "parts/footer.php";
?>
