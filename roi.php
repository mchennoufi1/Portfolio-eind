<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/roi.css"> 
        <title>Roi - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "roi";
                include("includes/header.php");
            ?>
        </header>
        <main>
        <div class="compound-calculator">
  <h3 class="text-center">Return on Investment Calculator</h3>
  <br>
  <div class="container" div="compound-g">
    <form id="cgForm">
      <div class="form-group">
        <label for="principal">Starting Amount</label>
        <input type="text" class="form-control" id="principal" placeholder="Enter amount without dollar sign">
      </div>
      <div class="form-group">
        <label for="return">Percentage of Return in Years</label>
        <input type="text" class="form-control" id="return" placeholder="Example: 10">
      </div>
      <div class="form-group">
        <label for="years">Amount of Years</label>
        <input type="text" class="form-control" id="years" placeholder="Example: 2 (must be in terms of years)">
      </div>
      <button type="submit" class="btn" id="btnCompound" onclick="compoundGain()">Submit</button>
    </form>
    <br>
    <div>
      <p id="cgOutput-01"></p>
      <p id="cgOutput-02"></p>
    </div>
  </div>
</div>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
    </body>
    <script src="js/roi.js"></script>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</html>
