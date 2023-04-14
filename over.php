<!DOCTYPE html>
<html class="theme-light">
<head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Home | Portfolio</title>
        <link rel="stylesheet" href="css/about.css">
    </head>
    <body>
        <header>
            <?php
                $page = "over";
                include("includes/header.php");
            ?>
        </header>
        <main>
            <div class="about">
                <div class="card aboutMe">
                    <h3 class="card-header">About me</h3>
                    <img class="card-body" src="img/code.jpg" alt="code" width="100%" height="300px"style="object-fit: cover;">
                        <p class="card-body">My name is Mohammed Chennoufi and I'm 20 years old. 
                        I'm a student, I study Software Development on ROC Mondriaan Tinwerf. 
                        My hobbies are working out, gaming, reading, watching movies and series. 
                        I'm currently learning some languages. I am learning Spanish, Arabic and Japanese.
                        I have worked in a flowershop for a year and I am currently working as a cleaner.
                    </p>
                </div>
                <div class="card beroepsprofiel">
                    <h3 class="card-header">Professional Profile</h3>
                    <h4 class="card-body">Software Developer</h4>
                    <p class="card-body">
                        Working as a Software Developer means that you develop software 
                        and or change existing software on request of your employer. 
                        This software is used to make websites run smoothly, build applications 
                        and let devices communicate with each other. I have chosen the study Software Development 
                        because I like working with computers and I want to build something that has a positive 
                        impact on peoples lives. 
                    </p>
                    <p class="card-body">There are five characteristics of a good programmer. These are: </p>
                    <ol>
                        <li>Being able to analyse well</li>  
                        <li>Having good concentration</li>  
                        <li>Having the right knowledge of certain programming languages(HTML, CSS, JavaScript,PHP)</li>  
                        <li>Having enough patience</li>   
                        <li>They like to solve problems</li>
                    </ol>
                </div>
            </div>
            
        </main>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>