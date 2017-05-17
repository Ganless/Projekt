<?php include "connection.php";

if (isset($_POST["submit"]))
{  
    
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password1 = mysqli_real_escape_string($connection, $_POST["password1"]);
    $password2 = mysqli_real_escape_string($connection, $_POST["password2"]);
    
    $password1 =$_POST["password1"];
    $password2 =$_POST["password2"];
    $hashformat = "$2y$10";
    $salt = "3feFKy5j4k3qP4mhY";
    $hashf_and_salt = $hashformat.$salt;
    
    $password1hash = crypt($password1, $hashf_and_salt);
    $password2hash = crypt($password2, $hashf_and_salt);
    
    $query = "SELECT * FROM `login` WHERE email= '$email'";    
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) >0)
    {
        echo "Emailen existerar redan!";
    }
    else 
    {
        if(($_POST["password1"])!=($_POST["password2"]))
            {
                die ("Oops! Lösenorden matchade inte! Försök igen.");
            }
            else 
            {
            global $connection ;
            $username= $_POST["username"];
            $email = $_POST["email"];
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
    
            $query = "INSERT INTO login (username, email, password1, password2) VALUES ('$username', '$email', '$password1hash', '$password2')";
            
        ?>
        
        <html>
            <meta http-equiv="refresh" content="3;http://localhost/bootstrap-4.0.0-projekt/index.php"/>
            <p class='text-center'><img src='images/ajax-loader.gif'></p>
        </html>
        
        <?php
            }

            $result = mysqli_query($connection, $query);
        if(!$result)
        {
        die ("failed");
        }
    }
}

?>
