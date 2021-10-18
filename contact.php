<!DOCTYPE html>
<html class="theme-light">
    <head>
        <?php
            include("includes/head.php");
            require("includes/database.php");
        ?>
        <title>Contact | Portfolio</title>
    </head>
    <body>
        <header>
            <?php
                $page = "contact";
                include("includes/header.php");
            ?>
            
        </header>
        <main>
            <div class=" row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <h3 class="card-title">Contactgegevens</h3>
                            <p class="card-header">Naam: Mohammed Chennoufi</p>
                            <p class="card-header">Telefoonnummer:<a href="tel:0617631457">0617631457</a></p>
                            <p class="card-header">E-Mail: mohammed_chennoufi@outlook.com</p>

                            <form action="" method="post">
                            <label>Email Address</label>
                            <input type="text" name="email_address" size="20">
                            <br>
                            <label>Your Feedback</label>
                            <textarea name="feedback" cols="25" rows="5"></textarea>
                            <br>
                            <input type="submit" name="submit" value="submit">
                            </form>

                            <p class="card-header">Social media: 
                                <a href="https://www.instagram.com/mohammed070._/">mohammed070._</a>
                            </p>
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
                                echo "heeeeelgoed";
                            }
                            else
                            {
                                echo "niettttgoed";
                            }
                        }
                    ?>

                </div>
            </div>
            <br><br>
        </main>
        <footer>
            Mohammed Chennoufi 2021
        </footer>
        <script src="js/index.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/mdb.min.js.map"></script>
    </body>
</html>