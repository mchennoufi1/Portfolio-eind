<!DOCTYPE html>
<html class="theme-light">
<head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
    </head>
    <body>
        <header>
            <?php
                $page = "projecten";
                include("includes/header.php");
            ?>
            <title>Projects | Portfolio</title>
            <link rel="stylesheet" href="css/projecten.css">
        </header>
        <main>
            <br>
            <div class="card">
            <h3 class="card-header">Thema-Switcher</h3>
            <br><br>
            <p class="card-body">De Thema-Switcher staat op elke pagina van mijn 
                <a href="index.php">portfolio</a> 
                website. Deze switcher veranderd de kleur van de website tussen licht en donker.
                Ik ben er trots op dat de thema niet terugveranderd naar licht 
                wanneer de pagina wordt gerefreshed.
            </p>
            <a href="index.php"><img class="card-body" src="img/theme-switcher.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Calculator</h3>
            <br><br>
            <p class="card-body">De calculator staat op de <a href="rekentool.php">rekentool</a>
                pagina. Het kan gebruikt worden om sommen te berekenen en waardes bij
                elkaar op te tellen. Ik ben er trots op dat ik de calculator
                verschillende kleuren heb kunnen geven.
            </p>
            <a href="rekentool.php"><img class="card-body" src="img/calculator.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Bmi Calculator</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="bmi.php"><img class="card-body" src="img/bmi.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Text counter</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="counter.php"><img class="card-body" src="img/counter.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">To-Do List</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="list.php"><img class="card-body" src="img/list.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Snake Game</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="snake.php"><img class="card-body" src="img/snake.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Tetris</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="tetris.php"><img class="card-body" src="img/tetris.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Tic Tac Toe</h3>
            <p class="card-body">De Tic Tac Toe staat op de <a href="spel.php">Tic Tac Toe</a> pagina. 
                Ik ben er trots op dat de naam van de spelers op het scherm kan wisselen.
            </p>
            <a href="spel.php"><img class="card-body" src="img/tictactoe.png" alt="CV" width="90%"></a>
            <br><br>
            </div>
            <div class="card">
            <h3 class="card-header">Size Calculator</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="size.php"><img class="card-body" src="img/size2.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Return on Investment Calculator</h3>
            <br><br>
            <p class="card-body">
            </p>
            <a href="roi.php"><img class="card-body" src="img/roi.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Zuzu</h3>
            <p class="card-body">De website Zuzu is gemaakt als een webshop, 
                waarin klanten diverse sushi kunnen bestellen.
            </p>
            <img class="card-body" src="img/zuzu2.png" alt="zuzu" width="90%">
            <br>
            </div>
        </main>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
    </body>
<script src="js/index.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/mdb.min.js.map"></script>
</html>