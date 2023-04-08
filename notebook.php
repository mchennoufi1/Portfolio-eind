<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <link rel="stylesheet" href="css/notebook.css"> 
        <title>Notebook - Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "notebook";
                include("includes/header.php");
            ?>
        </header>
        <main>

        <div class="notebook">
            <div class="pages">
                <div class="page hidden">
                    <h6>Page 1</h6>
                    <textarea></textarea>
                </div>
                <div class="page hidden">
                <h6>Page 2</h6>
                    <textarea></textarea>
                </div>
                <div class="page hidden">
                <h6>Page 3</h6>
                    <textarea></textarea>
                </div>
                <div class="page hidden">
                <h6>Page 4</h6>
                    <textarea></textarea>
                </div>
            </div>
            
        </div>
        <button id="prev-page">Previous Page</button>
            <button id="next-page">Next Page</button>
        </main>
        <br>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
    </body>
    <script src="js/notebook.js"></script>
    <script src="js/index.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</html>
