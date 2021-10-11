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
                style="<?php if($page == "home"){echo "color: black";}?>">Home</a>
                <a class="nav-link" aria-current="page" href="over.php"
                style="<?php if($page == "over"){echo "color: black";}?>">Over ons</a>
                <a class="nav-link" aria-current="page" href="cv.php"
                style="<?php if($page == "cv"){echo "color: black";}?>">CV</a>
                <a class="nav-link" aria-current="page" href="contact.php"
                style="<?php if($page == "contact"){echo "color: black";}?>">Contact</a>
                <a class="nav-link" aria-current="page" href="projecten.php"
                style="<?php if($page == "projecten"){echo "color: black";}?>">Projecten</a>
                <a class="nav-link" aria-current="page" href="rekentool.php"
                style="<?php if($page == "rekentool"){echo "color: black";}?>">Rekenmachine</a>
                <a class="nav-link" aria-current="page" href="spel.php"
                style="<?php if($page == "spel"){echo "color: black";}?>">Tic Tac Toe</a>
            </div>
        </div>
    </div>
</nav>
<br>
<div class="container" id="Switcher">
    <h3>Change Webpage Background</h3>
    <button id="switch"">Switch</button>
</div>
<br>
