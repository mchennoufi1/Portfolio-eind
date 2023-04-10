<!DOCTYPE html>
<html class="theme-light">
<head>
    <?php
    include("includes/head.php");
    require("includes/database.php");
    ?>
    <link rel="stylesheet" href="css/notes.css">
    <title>Notes - Portfolio</title>
</head>
<body>
<header>
    <?php
    $page = "notes";
    include("includes/header.php");
    ?>
</header>
<main>
    <div class="container notebox">
        <div class="header">Notes</div>
        <div id="newnote">
            <textarea type="text" placeholder="Notes.."></textarea>
            <button id="push">Add</button>
        </div>
        <div id="notes"></div>
    </div>
    <script src="js/notes.js"></script>
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
