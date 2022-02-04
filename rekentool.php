<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/rekentool.css"> 
        <title>Rekentool - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "rekentool";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <hr>
            <h3>Calculator</h3>
            <div id="container">
                <div id="calculator">
                    <div id="result">
                        <div id="history">
                            <p id="history-value"></p>
                        </div>
                        <div id="output">
                            <p id="output-value"></p>
                        </div>
                    </div>
                    <div id="keyboard">
                        <button class="operator" id="clear">C</button>
				        <button class="operator" id="backspace">CE</button>
				        <button class="operator" id="%">%</button>
				        <button class="operator" id="/">&#247;</button>
				        <button class="number" id="7">7</button>
				        <button class="number" id="8">8</button>
				        <button class="number" id="9">9</button>
				        <button class="operator" id="*">&times;</button>
				        <button class="number" id="4">4</button>
				        <button class="number" id="5">5</button>
				        <button class="number" id="6">6</button>
				        <button class="operator" id="-">-</button>
				        <button class="number" id="1">1</button>
				        <button class="number" id="2">2</button>
				        <button class="number" id="3">3</button>
				        <button class="operator" id="+">+</button>
				        <button class="empty" id="empty"></button>
				        <button class="number" id="0">0</button>
				        <button class="empty" id="empty"></button>
				        <button class="operator" id="=">=</button>
                    </div>
                </div>
            </div>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
    </body>
    <script src="js/index.js"></script>
    <script src="js/rekentool.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>
