<?php
session_start();

$dbUserEmail = "philip.kvarnheden@hotmail.com";
$dbUserPassword = "hejhej";

if (isset($_POST["submit"]))
{  
    $email = $_POST['email'];
    $password = $_POST['password2'];
        if ($email == $dbUserEmail) {
            if ($password == $dbUserPassword) {
                $_SESSION['CurrentUser'] = $email;
                echo "Välkommen tillbaka " . $email;
            }
        }
    else
    {    
        echo "Kontot existerar ej. Var vänligen och registrer dig!";    
    }
}
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap-projekt</title>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

            <div class="container">

                <form action="loginTest.php" id="usersignup" name="usersignup" method="post">
                    <br>
                    </h2>Logga in!</h2>
                    <br>
                    <input name="email" id="email" type="text" placeholder="Email" autofocus>
                    <br>
                    <input name="password2" id="password2" type="password" class="password2" placeholder="Lösenord">
                    <br>
                    <input type="submit" name="submit" value="Logga in">

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
            


            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            
            
        </header>
    </body>

    </html>