<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/bmi.css"> 
        <title>BMI - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "bmi";
                include("includes/header.php");
            ?>
        </header>
        <main>
                <div class="card bmi">
                <h3>BMI Calculator</h3>
                    <div class="inputfield">
                    <p>Height in CM:    
                        <input type="text" id="height"><br><span id="height_error"></span>
                    </p>
                    <p>Weight in KG:    
                        <input type="text" id="weight"><br><span id="weight_error"></span>
                    </p>
                    <button id="btn-bmi">Calculate</button>
                    </div>
                    <p id="output"></p>
                </div>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
    </body>
    <script src="js/bmi.js"></script>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</html>
