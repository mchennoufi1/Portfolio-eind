<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Contact | Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "contact";
                include("includes/header.php");
            ?>
            
        </header>
        <main>
            <div class=" row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <h3 class="card-title">Contactgegevens</h3>
                            <p class="card-header">Naam: Mohammed Chennoufi</p>
                            <p class="card-header">Telefoonnummer:<a href="tel:0617631457">0617631457</a></p>
                            <p class="card-header">E-Mail:
                            <a href="mailto:mohammed_chennoufi@outlook.com">mohammed_chennoufi@outlook.com</a>
                            </p>
                            <p class="card-header">Social media: 
                                <a href="https://www.instagram.com/mohammed070._/">mohammed070._</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>