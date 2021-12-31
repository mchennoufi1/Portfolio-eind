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
                style="<?php if($page == "home"){echo "color: rgb(38, 34, 34)";}?>">Home</a>
                <a class="nav-link" aria-current="page" href="over.php"
                style="<?php if($page == "over"){echo "color: rgb(38, 34, 34)";}?>">Over mij</a>
                <a class="nav-link" aria-current="page" href="cv.php"
                style="<?php if($page == "cv"){echo "color: rgb(38, 34, 34)";}?>">CV</a>
                <a class="nav-link" aria-current="page" href="contact.php"
                style="<?php if($page == "contact"){echo "color: rgb(38, 34, 34)";}?>">Contact</a>
                <a class="nav-link" aria-current="page" href="projecten.php"
                style="<?php if($page == "projecten"){echo "color: rgb(38, 34, 34)";}?>">Projecten</a>
                <a class="nav-link" aria-current="page" href="rekentool.php"
                style="<?php if($page == "rekentool"){echo "color: rgb(38, 34, 34)";}?>">Rekenmachine</a>
                <a class="nav-link" aria-current="page" href="spel.php"
                style="<?php if($page == "spel"){echo "color: rgb(38, 34, 34)";}?>">Tic Tac Toe</a>
            </div>
        </div>
    </div>
</nav>
<br><br>
<div class="container" id="Switcher">
    <h3>Change Webpage Background</h3>
    <button id="switch"">Switch</button>
</div>
<br>
