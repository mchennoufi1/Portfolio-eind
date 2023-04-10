<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>CV | Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "cv";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <br><br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <h3 class="card-title">CV</h3>
                            <img class="card-body" src="img/cv-deel1.png" alt="CV" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>