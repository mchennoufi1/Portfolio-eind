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
                $page = "over";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <h3 class="card-header">Over mij</h3>
                            <img class="card-body" src="img/code.jpg" alt="code" width="100%" height="300px"style="object-fit: cover;">
                             <p class="card-body">Ik ben Mohammed Chennoufi en ik ben 18 jaar oud. 
                                Ik volg nu de opleiding Software Developer Niveau 4, op het ROC Mondriaan Locatie Tinwerf. 
                                Mijn hobbies zijn sporten, gamen, films kijken, youtube video's kijken en boeken lezen. 
                                Ik help graag mensen en ik spreek respectvol tegenover anderen. 
                                Ik heb ongeveer een jaar gewerkt in een bloemenwinkel, 
                                waarbij ik bloemen en planten heb verkocht.
                            </p>
                            <h2 class="card-header">Beroepsprofiel</h2>
                            <br>
                            <h4 class="card-body">Software Developer</h4>
                            <p class="card-body">Werken als programmeur betekent dat je nieuwe software ontwikkelt 
                                en bestaande software aanpast op basis van de wensen van de gebruiker. 
                                Deze software zorgt er bijvoorbeeld voor dat websites draaien, 
                                apps werken of apparaten met elkaar kunnen communiceren. 
                                Ik heb gekozen voor Software Developer omdat ik graag met computers zou willen werken 
                                en het maken van een website leuk vind. 
                                Er zijn 5 eigenschappen dat een goede programmeur bezit.
                            </p>
                            <p class="card-body" id="Beroepsprofiel">Deze eigenschappen zijn: </p>
                            <ol>
                                <li>Analytisch</li>  
                                <li>Goede concentratie </li>  
                                <li>Handige programmeertalen kennen en kunnen gebruiken (HTML,CSS,JS,BOOTSTRAP,PHP)</li>  
                                <li>Geduld</li>   
                                <li>Graag problemen willen oplossen</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
        <hr>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>