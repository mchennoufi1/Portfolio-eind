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
            <a href="index.php"><img class="card-body" src="img/theme-switcher.png" alt="Theme-Switcher" width="100%"></a>
            <p class="card-footer">De Thema-Switcher staat op elke pagina van mijn 
                <a href="index.php">portfolio</a> 
                website. Deze switcher veranderd de kleur van de website tussen licht en donker.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Calculator</h3>
            <br>
            <a href="rekentool.php"><img class="card-body" src="img/calculator2.png" alt="Calculator" width="100%"></a>
            <br>
            <p class="card-footer">De calculator staat op de <a href="rekentool.php">rekentool</a>
                pagina. Het kan gebruikt worden om sommen te berekenen en waardes bij
                elkaar op te tellen.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Bmi Calculator</h3>
            <a href="bmi.php"><img class="card-body" src="img/bmi.png" alt="Bmi Calculator" width="100%"></a>
            <br>
            <p class="card-footer">De Bmi calculator staat op de <a href="bmi.php">Bmi Calculator</a>
                pagina. Het kan gebruikt worden om de bmi van jezelf of iemand anders te berekenen.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Text counter</h3>
            <a href="counter.php"><img class="card-body" src="img/counter.png" alt="Text Counter" width="100%"></a>
            <br>
            <p class="card-footer">De Text Counter staat op de <a href="counter.php">Text Counter</a>
                pagina. Het kan gebruikt worden om de letters en woorden in een text op te tellen.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">To-Do List</h3>
            <a href="list.php"><img class="card-body" src="img/list2.png" alt="List" width="100%"></a>
            <br>
            <p class="card-footer">De To-Do List staat op de <a href="list.php">To-Do List</a>
                pagina. Het kan gebruikt worden om de taken van je dag in te voeren en te weergeven als een lijst.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Snake Game</h3>
            <a href="snake.php"><img class="card-body" src="img/snake.png" alt="Snake" width="100%"></a>
            <br>
            <p class="card-footer">De Snake Game staat op de <a href="snake.php">Snake Game</a>
                pagina. Het is een beroemde spel dat op deze website gespeeld kan worden.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Tetris</h3>
            <a href="tetris.php"><img class="card-body" src="img/tetris.png" alt="Tetris" width="100%"></a>
            <br>
            <p class="card-footer">De Tetris Game staat op de <a href="tetris.php">Tetris Game</a>
                pagina. Het is een beroemde spel dat op deze website gespeeld kan worden.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Tic Tac Toe</h3>
            <a href="tictactoe.php"><img class="card-body" src="img/tictactoe.png" alt="Tic Tac Toe" width="100%"></a>
            <br>
            <p class="card-footer">De Tic Tac Toe staat op de <a href="tictactoe.php">Tic Tac Toe</a> pagina. 
                Het is een beroemde spel dat op deze webasite gespeeld kan worden.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Size Calculator</h3>
            <a href="size.php"><img class="card-body" src="img/size2.png" alt="Size Calculator" width="100%"></a>
            <p class="card-footer">De Size Calculator staat op de <a href="size.php">Size Calculator</a> pagina. 
                Het kan gebruikt worden om de grootte van je positie te berekenen voor een trade.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Return on Investment Calculator</h3>
            <a href="roi.php"><img class="card-body" src="img/roi.png" 
            alt="Return on Investment Calculator" width="100%"></a>
            <p class="card-footer">De Return on Investment Calculator staat op de <a href="roi.php">Return on Investment Calculator</a> pagina. 
                Het kan gebruikt worden om de de grootte van je account te berekenen na een aantal jaar 
                met een specifiek aantal percentage groei per jaar.
            </p>
            </div>

            <div class="card">
            <h3 class="card-header">Zuzu</h3>
            
            <img class="card-body" src="img/zuzu2.png" alt="zuzu" width="100%">
            <br>
            <p class="card-footer">De website Zuzu is gemaakt als een webshop, 
                waarin klanten diverse sushi kunnen bestellen.
            </p>
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