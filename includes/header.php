<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/diamant.jpg" alt="Logo" width="50px" height="50px" style="object-fit: cover;"></a>
        <br>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="index.php" 
                style="<?php if($page == "home"){echo "color: rgb(68, 70, 74)!important";}?>">Home</a>
                <a class="nav-link"  aria-current="page" href="over.php"
                style="<?php if($page == "over"){echo "color: rgb(68, 70, 74)!important";}?>">Over mij</a>
                <a class="nav-link" aria-current="page" href="cv.php"
                style="<?php if($page == "cv"){echo "color: rgb(68, 70, 74)!important";}?>">CV</a>
                <a class="nav-link" aria-current="page" href="contact.php"
                style="<?php if($page == "contact"){echo "color: rgb(68, 70, 74)!important";}?>">Contact</a>
                <div class="nav-link dropdown">
                    <button class="dropbtn">Projecten
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a class="nav-link" aria-current="page" href="projecten.php"
                           style="<?php if($page == "projecten"){echo "color: rgb(68, 70, 74)!important";}?>">Project Overzicht</a>
                        <a class="nav-link" aria-current="page" href="bmi.php"
                           style="<?php if($page == "bmi"){echo "color: rgb(68, 70, 74)!important";}?>">Bmi Calculator</a>
                        <a class="nav-link" aria-current="page" href="rekentool.php"
                           style="<?php if($page == "rekentool"){echo "color: rgb(68, 70, 74)!important";}?>">Rekenmachine</a>
                        <a class="nav-link" aria-current="page" href="list.php"
                           style="<?php if($page == "list"){echo "color: rgb(68, 70, 74)!important";}?>">To-Do List</a>
                        <a class="nav-link" aria-current="page" href="counter.php"
                           style="<?php if($page == "counter"){echo "color: rgb(68, 70, 74)!important";}?>">Text Counter</a>
                    </div>
                </div>
                <div class="nav-link dropdown">
                    <button class="dropbtn">Spellen
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a class="nav-link" aria-current="page" href="tictactoe.php"
                style="<?php if($page == "tic"){echo "color: rgb(68, 70, 74)!important";}?>">Tic Tac Toe</a>
                        <a class="nav-link" aria-current="page" href="snake.php"
                           style="<?php if($page == "snake"){echo "color: rgb(68, 70, 74)!important";}?>">Snake Game</a>
                           <a class="nav-link" aria-current="page" href="tetris.php"
                           style="<?php if($page == "tetris"){echo "color: rgb(68, 70, 74)!important";}?>">Tetris</a>
                    </div>
                </div>
                <div class="nav-link dropdown">
                    <button class="dropbtn">Traden
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a class="nav-link" aria-current="page" href="size.php"
                    style="<?php if($page == "size"){echo "color: rgb(68, 70, 74)!important";}?>">Size Calculator</a>
                    <a class="nav-link" aria-current="page" href="roi.php"
                       style="<?php if($page == "roi"){echo "color: rgb(68, 70, 74)!important";}?>">Return On Investment Calculator</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</nav>
<br>
<div class="container" id="Switcher">
    <h3>Change Webpage Background</h3>
    <btn id="switch">Switch</btn>
</div>
<br>
