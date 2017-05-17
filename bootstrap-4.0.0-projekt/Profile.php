<?php
session_start('CurrentUser');

//Loggar ut användaren och förstör sessionen.
if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        ?>        
        <html>
            <meta http-equiv="refresh" content="1;http://localhost/bootstrap-4.0.0-projekt/index.php" />
        </html>
        <?php
        
    }
?>
    <!DOCTYPE html>
    <html lang="sv-SE">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap-projekt</title>

        <!-- Bootstrap -->
        <link href="style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--  NAVIGATION BAR  -->
        <header>
            <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="Home.php">IT-Store</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php">Hem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produkter.php">Produkter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakta.php">Kontakta oss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hittaOss.php">Hitta oss</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="container-account" id="Account">
                            <div class="btn-group">
                                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="Profile.php" id="ProfilePage">Profil</a>
                                    </li>
                                    <li></li>
                            </div>
                        </div>
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Sök</button>
                    </form>
                </div>
            </nav>
        </header>
        <!--      VISAR ATT DU ÄR INLOGGAR OCH VISAR KNAPPEN FÖR ATT KUNNA LOGGA UT         -->
        <div class="container">
        <br><br>
        <?php
            //SER TILL SÅ ATT DU ÄR INLOGGAD FÖR ATT VISA DITT ANVÄNDARNAMN SAMT UTLOGGNINGS KNAPPEN
            if (isset($_SESSION['CurrentUser'])) {
            echo "Välkommen " .$_SESSION['CurrentUser'] . " Det här är din profil!";
        ?>
           <br><br>
            <a href="Profile.php?logout=1" class="btn btn-lg btn-primary btn-default">Klicka här för att logga ut!</a>

        <?php
        }
            
            
        else 
        {
            echo "Du måste vara inloggad för att se denna sida!";
        ?>
            <br><br>
            <a href="login.php" class="btn btn-lg btn-primary btn-default">Klicka här för att logga in!</a>
        <?php
        }
        ?>
        </div>


                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
