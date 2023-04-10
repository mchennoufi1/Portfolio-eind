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
            <title>Projecten | Portfolio</title>
        </header>
    <main>
        <div class=" row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-body justify-content-center">
                        <h2 class="card-title">Projecten</h2>
                        <br><br>
                        <h3 class="card-header">CV opdracht</h3>
                        <a href="cv.php"><img class="card-body" src="img/cv-deel1.png" alt="CV" width="80%"></a>

                        <h3 class="card-header">Grid opdracht</h3>
                        <img class="card-body" src="img/grid-oefen.png" alt="CV" width="80%">

                        <h3 class="card-header">Thema-Switcher</h3>
                        <br><br>
                        <p class="card-body">De Thema-Switcher staat op elke pagina van mijn 
                            <a href="index.php">portfolio</a> 
                            website. Deze switcher veranderd de kleur van de website tussen licht en donker.
                            Ik ben er trots op dat de thema niet terugveranderd naar licht 
                            wanneer de pagina wordt gerefreshed.
                        </p>
                        <a href="index.php"><img class="card-body" src="img/thema-switcher.png" alt="CV" width="80%"></a>

                        <h3 class="card-header">Calculator</h3>
                        <br><br>
                        <p class="card-body">De calculator staat op de <a href="rekentool.php">rekentool</a>
                            pagina. Het kan gebruikt worden om sommen te berekenen en waardes bij
                            elkaar op te tellen. Ik ben er trots op dat ik de calculator
                            verschillende kleuren heb kunnen geven.
                        </p>
                        <a href="rekentool.php"><img class="card-body" src="img/calculator.png" alt="CV" width="80%"></a>

                        <h3 class="card-header">Tic Tac Toe</h3>
                        <p class="card-body">De Tic Tac Toe staat op de <a href="spel.php">Tic Tac Toe</a> pagina. 
                            Ik ben er trots op dat de naam van de spelers op het scherm kan wisselen.
                        </p>
                        <a href="spel.php"><img class="card-body" src="img/spel.png" alt="CV" width="80%"></a>
                        <br><br>

                        <h3 class="card-header">Zuzu</h3>
                        <p class="card-body">De website Zuzu is gemaakt als een webshop, 
                            waarin klanten diverse sushi kunnen bestellen.
                        </p>
                        <img class="card-body" src="img/zuzu.jpeg" alt="zuzu" width="80%">
                        <br>
                        
                        
                    </div>
                </div>
            </div>
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