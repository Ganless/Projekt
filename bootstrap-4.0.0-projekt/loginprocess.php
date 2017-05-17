<?php

include "connection.php";

	

if (isset($_POST["submit"]))
{  
	$usernameInput = mysqli_real_escape_string($connection, $_POST["username"]);
    $passwordInput = mysqli_real_escape_string($connection, $_POST["password2"]);
	
    $query = "SELECT * FROM login WHERE username = '$usernameInput' AND password2 = '$passwordInput'";
	$result = mysqli_query($connection, $query);
	
	if (mysqli_num_rows($result) == 1) 
	{
        $userName = $usernameInput;
        $userPass = $passwordInput;
			if ($usernameInput = $userName) {
				if ($passwordInput = $userPass) {
					$_SESSION['CurrentUser'] = $usernameInput;
                    ?>
                    
                    
                    <meta http-equiv="refresh" content="3;http://localhost/bootstrap-4.0.0-projekt/Home.php"/>
                    <p class='text-center'><img src='images/ajax-loader.gif'></p>
                    
                    
                    
                    <?php
				}
			}
    }
	else 
    {    
        echo "Kontot existerar ej. Var vänligen och registrer dig!";    
    }
}
?>


