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
                    <div class="container">
                        <div class="card-body justify-content-center">
                            <div class="container">
                                <span>
                                    <img src="img/span8.jpeg" alt="code" width="100%" height="300px"style="object-fit: cover;">
                                    
                                <h4>Welcome to my Portfolio Website</h4>
                                </span>
                            </div>
                             <p class="card-body">My name is Mohammed Chennoufi and I'm 20 years old.
                                In this website I talk <a href="over.php">about me</a> and what I do. I also show the <a href="projecten.php">projects</a> that I have worked on.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inhoud-begin">
                <h3 class="projecten">Projects</h3>
                <div class="row">
                    <div class="col-md-4">
                    <a href="tictactoe.php"><div class="card">
                    <h6 class="card-body">Tic Tac Toe</h6>
                    <img class="calculatorfoto" src="img/tictactoe.png" alt="spel" width="100%" height="200px" style="object-fit: cover;">         
                    </div>
                    </div>
                    </a>
                    <div class="col-md-4">
                    <a href="rekentool.php"><div class="card">
                    <h6 class="card-body">Calculator</h6>
                    <img class="calculatorfoto" src="img/calculator2.png" alt="calculator" width="100%" height="200px" style="object-fit: cover;">             
                    </div>
                    </div>
                    </a>
                    <div class="col-md-4">
                    <a href="index.php"><div class="card">
                    <h6 class="card-body">Theme-switcher</h6>
                    <img class="calculatorfoto" src="img/theme-switcher.png" alt="thema-switcher" width="100%" height="200px" style="object-fit: cover;">         
                    </div>
                    </a>
            </div>
            </a>
            <div class="clr"></div>
        </main>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
    </body>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>