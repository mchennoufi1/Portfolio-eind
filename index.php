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
        <br><br>
        <main>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <h3 class="card-title">Over mij</h3>
                            <img class="card header" src="img/code.jfif" alt="code" width="100%" height="300px"style="object-fit: cover;">
                             <h2 class="card-body">Mohammed Chennoufi</h2>
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
            <br><br>
            <h2>Projecten</h2>
            <br>
            <ol class="inhoud-begin">Op deze website staat er:
                <br><br>
            <li>
                <a href="rekentool.php">rekentool</a>
            </li>
            <li>
                <a href="spel.php">Tic Tac Toe</a>
            </li>
            <li>Thema-switcher</li>
        </ol>
            <br><br>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
        <hr>
    </body>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>