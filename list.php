<!DOCTYPE html>
<html class="theme-light">
<head>
    <?php
    include("includes/head.php");
    require("includes/database.php");
    ?>
    <link rel="stylesheet" href="css/list.css">
    <title>To-Do List - Portfolio</title>
</head>
<body>
<header>
    <?php
    $page = "list";
    include("includes/header.php");
    ?>
</header>
<main>
    <div class="container taskbox">
        <div class="header">To-Do List</div>
        <div id="newtask">
            <input type="text" placeholder="Task to be done..">
            <button id="push">Add</button>
        </div>
        <div id="tasks"></div>
    </div>
    <script src="js/list.js"></script>
</main>
<br>
<footer>
    Mohammed Chennoufi 2021
</footer>
</body>
<script src="js/index.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
</html>
