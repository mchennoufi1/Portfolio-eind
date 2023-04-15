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
            <div class="card cards">
            <h3 class="card-header">CV</h3>
            <a href="cv.php"><img class="card-body" src="img/cv3.png" alt="CV" width="90%"></a>
            </div>
            <div class="card">
            <h3 class="card-header">Grid</h3>
            <img class="card-body" src="img/grid-oefen.png" alt="CV" width="90%">
            </div>
            <div class="card">
            <h3 class="card-header">Thema-Switcher</h3>
            <br><br>
            <p class="card-body">De Thema-Switcher staat op elke pagina van mijn 
                <a href="index.php">portfolio</a> 
                website. Deze switcher veranderd de kleur van de website tussen licht en donker.
                Ik ben er trots op dat de thema niet terugveranderd naar licht 
                wanneer de pagina wordt gerefreshed.
            </p>
            <a href="index.php"><img class="card-body" src="img/thema-switcher.png" alt="CV" width="90%"></a>
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
            <h3 class="card-header">Tic Tac Toe</h3>
            <p class="card-body">De Tic Tac Toe staat op de <a href="spel.php">Tic Tac Toe</a> pagina. 
                Ik ben er trots op dat de naam van de spelers op het scherm kan wisselen.
            </p>
            <a href="spel.php"><img class="card-body" src="img/spel.png" alt="CV" width="90%"></a>
            <br><br>
            </div>
            <div class="card">
            <h3 class="card-header">Zuzu</h3>
            <p class="card-body">De website Zuzu is gemaakt als een webshop, 
                waarin klanten diverse sushi kunnen bestellen.
            </p>
            <img class="card-body" src="img/zuzu.jpeg" alt="zuzu" width="90%">
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