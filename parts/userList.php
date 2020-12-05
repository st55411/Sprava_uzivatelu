<section class="centeredContentWrapper" style="width: 1000px">
    <h1>Seznam uživatelů</h1>
<?php

$servername = "localhost";
$usernameDb = "root";
$passwordDb = "";
$db = "iwww";

echo "<table style='border: solid 1px black; margin-left: 20px'>";
echo "<tr><th>Id</th><th>Jméno</th><th>Heslo</th><th>E-mail</th><th>Role</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $usernameDb, $passwordDb);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
echo "</table>";

?>
    </section>
