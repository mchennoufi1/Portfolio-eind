<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/tictactoe.css"> 
        <title>Tic Tac Toe - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "tic";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <div class="box">
                <div class="row">
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                </div>
                <div class="row">
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                </div>
                <div class="row">
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                    <input class="btn" type="text" readonly>
                </div>
            </div>
            <p class="result">Player X Turn</p>
            <div class="reset">
                <button id="reset">Reset</button>
            </div>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
    </body>
    <script src="js/index.js"></script>
    <script src="js/tictactoe.js"></script>
    <script src="js/mdb.min.js"></script>
</html>
