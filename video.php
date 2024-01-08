<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Video on Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'dane3');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $q3 = "DELETE FROM produkty WHERE id=$id";
    mysqli_query($conn, $q3);
}
?>

<body>
    <header>
        <div id="lewy">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </div>
        <div id='prawy'>
            <table>
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </div>
    </header>
    <div id="polecamy">
        <h3>Polecamy</h3>
        <?php
        $q1 = "SELECT id,nazwa,opis,zdjecie FROM produkty WHERE id=18 OR id=22 OR id=23 OR id=25";
        $res1 = mysqli_query($conn, $q1);
        foreach ($res1 as $row) {
            echo "<div class='chunk'>";
            echo "<h4>$row[id].$row[nazwa]</h4>";
            echo "<img src='" . $row["zdjecie"] . "'alt='film'>";
            echo "<p>$row[opis]</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div id="fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php
        $q2 = "SELECT id,nazwa,opis,zdjecie FROM produkty WHERE Rodzaje_id=12";
        $res2 = mysqli_query($conn, $q2);
        foreach ($res2 as $row) {
            echo "<div class='chunk'>";
            echo "<h4>$row[id].$row[nazwa]</h4>";
            echo "<img src='" . $row["zdjecie"] . "'alt='film'>";
            echo "<p>$row[opis]</p>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>
    </div>
    <footer>
        <form action="video.php" method="post">
            <label for="id">Usuń film nr.:</label>
            <input type="number" name="id">
            <input type="submit" value="Usuń film">
        </form>
        Stronę wykonał: <a href="mailto:ja@poczta.com">PESEL</a>
    </footer>
</body>

</html>