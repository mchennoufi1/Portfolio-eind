<!DOCTYPE html>
<html class="theme-light">
<head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Home | Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "home";
                include("includes/header.php");
            ?>
        </header>
        <br>
        <main>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <span class="card header"><img src="img/leeuw.jpeg" alt="code" width="100%" height="300px"style="object-fit: cover;"></span>
                            <h3 class="card-body">Mohammed Chennoufi</h3>
                             <p class="card-body">Ik ben Mohammed Chennoufi en ik ben 18 jaar oud. 
                                Ik volg nu de opleiding Software Developer Niveau 4, op het ROC Mondriaan Locatie Tinwerf. 
                                Mijn hobbies zijn sporten, gamen, films kijken, youtube video's kijken en boeken lezen. 
                                Ik help graag mensen en ik spreek respectvol tegenover anderen. 
                                Ik heb ongeveer een jaar gewerkt in een bloemenwinkel, waarbij ik bloemen en planten heb verkocht.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inhoud-begin">
                <h3 class="projecten">Projecten</h3>
                <div class="row">
                    <div class="col-md-4">
                    <a href="spel.php"><div class="card">
                    <h6 class="card-body">Tic Tac Toe</h6>
                    <img class="calculatorfoto" src="img/spel.png" alt="spel" width="100%" height="200px" style="object-fit: cover;">         
                    </div>
                    </div>
                    </a>
                    <div class="col-md-4">
                    <a href="rekentool.php"><div class="card">
                    <h6 class="card-body">Rekentool</h6>
                    <img class="calculatorfoto" src="img/calculator.png" alt="calculator" width="100%" height="200px" style="object-fit: cover;">             
                    </div>
                    </div>
                    </a>
                    <div class="col-md-4">
                    <a href="index.php"><div class="card">
                    <h6 class="card-body">Thema-switcher</h6>
                    <img class="calculatorfoto" src="img/thema-switcher.png" alt="thema-switcher" width="100%" height="200px" style="object-fit: cover;">         
                    </div>
                    </a>
            </div>
            </a>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
    </body>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>