<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Contact | Portfolio</title>
        <link rel="stylesheet" href="css/about.css">
    </head>
    <body>
        <header>
            <?php
                $page = "contact";
                include("includes/header.php");
            ?>
            
        </header>
        <main>
                    <div class="card contact">
                            <h3 class="card-header">Contactgegevens</h3>
                            <div class="card-body">
                            <p>Naam: Mohammed Chennoufi</p>
                            <p>Telefoonnummer:<a href="tel:0617631457">0617631457</a></p>
                            <p>E-Mail: mohammed_chennoufi@outlook.com</p>
                            <p>LinkedIn: <a href="https://www.linkedin.com/in/mohammed-chennoufi-aa687a207/">Mohammed Chennoufi</a></p>
                            <p>Social media: 
                                <a href="https://www.instagram.com/gghm070/">gghm070</a>
                            </p>
                            
                            <form class="my-form" action="" method="post">
                            <div class="form-group">
                                <label>Email-adres:</label>
                                <input type="text" name="email_address" size="20">
                            </div>
                            <div class="form-group">
                                <label>Bericht:</label>
                                <textarea name="feedback" cols="20" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Versturen">
                            </div>
                            </form>
                        </div>
                        </div>
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $email_address = $_POST['email_address'];
                            $feedback = $_POST['feedback'];
                                
                            $to = "mohammed_chennoufi@outlook.com";
                            $subject = "Test mail";
                            $headers = "From: nabil_chennoufi@outlook.com";

                            $sent = mail($to,$subject,$feedback,$headers);

                            if($sent)
                            {
                                echo "Gelukt";
                            }
                            else
                            {
                                echo "Niet gelukt";
                            }
                        }
                    ?>
        </main>
        <footer>
            Mohammed Chennoufi 2023
        </footer>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>