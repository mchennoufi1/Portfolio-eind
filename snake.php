<!DOCTYPE html>
<html class="theme-light">
<head>
    <?php
    include("includes/head.php");
    require("includes/database.php");
    ?>
    <link rel="stylesheet" href="css/snake.css">
    <title>Snake Game - Portfolio</title>
</head>
<body>
<header>
    <?php
    $page = "snake";
    include("includes/header.php");
    ?>
</header>
<main>
    <div class="gc">
        <p>Game Instructions: Use the bottoms up, down,
            left and right to control the snake.
            Eat the red spots to grow your snake.
            Try not to touch your tail! Press any of the keys to start.
        </p>
    <canvas id="gc" width="400" height="400"></canvas>
    </div>
</main>
<br>
<footer>
    Mohammed Chennoufi 2023
</footer>
</body>
<script src="js/snake.js"></script>
<script src="js/index.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</html>
