<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Video on Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>

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
        //s1
        ?>
    </div>
    <div id="Fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php
        //s2
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