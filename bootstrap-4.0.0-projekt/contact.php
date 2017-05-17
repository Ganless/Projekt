<?php
include "connection.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap-projekt</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet" media="screen">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header id="Navbar">
            <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">IT-Store</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Hem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produkter.php">Produkter</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Kontakta oss</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="container-account">
                            <div class="btn-group">
                                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                   <li class="nav-item">
                                            <a class="nav-link" href="login.php">Logga in</a>
                                        </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="registrera.php">Bli medlem</a>
                                    </li>
                                </ul>
                            </div>
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Sök</button>
                    </form>
                    </div>
            </nav>

            <div class="container">

                <form action="contact.php" id="usersignup" name="usersignup" method="post">
                    <br>
                    <h2 class="form-signup-heading">Kontakta oss!</h2>
                    <br>
                    <input name="name" id="name" type="text" class="form-control" placeholder="Förnamn" autofocus>
                    <input name="surname" id="surname" type="text" class="form-control" placeholder="Efternamn" autofocus>
                    <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                    <input name="phonenumber" id="phonenumber" type="text" class="form-control" placeholder="Telefonnummer">
                    <br>
                    <textarea id="message" class="form-control message" name="message" rows="7" placeholder="Meddelande"></textarea>
                    <br>
                    <input type="submit" class="btn btn-lg btn-primary btn-default" name="submit" id="submit" value="Registrera dig!" onclick="loader();">

                </form>

            </div>
            <!-- /container -->

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="//code.jquery.com/jquery.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script type="text/javascript" src="js/bootstrap.js"></script>

            <!-- <script src="js/signup.js"></script> -->


            <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
            <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
            <script>
                $("#usersignup").validate({
                    rules: {
                        name: {
                            required: true
                        },
                        email: {
                            email: true,
                            required: true
                    }
                });

            </script>



            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
        </header>
        
           
        <?php include  "contactFunction.php";?>
            
    </body>

    </html>
