<!DOCTYPE html>
<html class="theme-light">
<head>
    <?php
    include("includes/head.php");
    require("includes/database.php");
    ?>
    <link rel="stylesheet" href="css/tetris.css">
    <title>Tetris - Portfolio</title>
</head>
<body>
    <header>
        <?php
        $page = "tetris";
        include("includes/header.php");
        ?>
    </header>
    <main>
        <div class="tetris">
        <div class="game">
            <h3>Tetris Game</h3>
            <p>
                Game Intructions:
                You can move the blocks around, 
                either left to right and/or you can rotate them by pressing up. 
                The blocks fall at a certain rate, 
                but you can make them fall faster by 
                pressing down if you're sure of your positioning.
            </p>
            </div>
            <div>
        <canvas id="tetris" width="220" height="400"></canvas>
        <div>
        </div>
        <script src="js/tetris.js" charset="utf-8"></script>
    </main>
    <br>
    <footer>
        Mohammed Chennoufi 2023
    </footer>
</body>
<script src="js/index.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</html>
