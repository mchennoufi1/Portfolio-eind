<!DOCTYPE html>
<html class="theme-light">
<head>
    <link rel="stylesheet" href="css/spel.css"> 
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Spel | Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "spel";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <hr>
            <h3 id="player">playerX</h3>
            <br><br>
            <div class="grid">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <br><br>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
        <hr>
        <script src="js/spel.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>