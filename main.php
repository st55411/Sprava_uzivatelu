<?php
include "parts/connectControl.php";
include "parts/menu.php";

if ($_POST) {
    $id = mysqli_real_escape_string($db, $_POST['id']);

    if (empty($id)) { //prazdne nejake pole ve formulari

        echo "neco neni vyplnene";

    } else {

            $sql = "DELETE FROM user WHERE user_id = '$id'";
            if (mysqli_query($db, $sql)) {
                echo "Records deleted successfully.";

            } else {
                echo "Error $sql. " . mysqli_error($db);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Můj cestovatelsý blog/</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<section id="hero">

    <h1 class="pageHeading">Cestovatelský blog</h1>
    <h1>Vítej <?php echo $login_session; ?></h1>
    <div class="button"><a href="#">Chci taky cestovat</a></div>
</section>

<section>
    <div class="centeredContentWrapper">
        <h2>Poslední navštívená místa</h2>
    </div>

    <div id="blogPostList" class="centeredContentWrapper">
        <article class="blogPostPreview">
            <img src="img/Ralsko.jpg" alt="Obrazek Ralsko">
            <h3>Ralsko</h3>
        </article>

        <article class="blogPostPreview">
            <img src="img/Snezka.jpg" alt="Obrazek Snezky">
            <h3>Sněžka</h3>
        </article>

        <article class="blogPostPreview">
            <img src="img/Orli_hnizdo.jpg" alt="Obrazek Orliho hnizda">
            <h3>Orlí hnízdo</h3>
        </article>

    </div>
</section>

</body>
</html>




<?php //kdyz je uzivatel spravce, ukaz tabulku uzivatelu

$sql = "select * from user where email = '$login_session'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = $result->fetch_assoc();

    if ($row['role'] == 1) {
        include  "parts/formRemove.php";
        include "parts/userList.php";
    }

}

include "parts/footer.php";
?>

