<!DOCTYPE html>
<html class="theme-light">
<head>
    <?php
    include("includes/head.php");
    require("includes/database.php");
    ?>
    <link rel="stylesheet" href="css/counter.css">
    <title>Text Counter - Portfolio</title>
</head>
<body>
<header>
    <?php
    $page = "counter";
    include("includes/header.php");
    ?>
</header>
<main>
    <div class="container counter">
        <div class="title">Text Counter</div>
        <textarea id="text" placeholder="Type your text here..."></textarea>
        <div class="status">
            <span id="char"></span>
            <span id="words"></span>
            <span id="lines"></span>
            <span id="symbols"></span>
        </div>
    </div>
    <script src="js/counter.js"></script>
</main>
<br>
<footer>
    Mohammed Chennoufi 2023
</footer>
</body>
<script src="js/index.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</html>
