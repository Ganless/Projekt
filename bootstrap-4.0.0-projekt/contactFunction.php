<?php
include "connection.php";

if (isset($_POST["submit"])) {

    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $surname = mysqli_real_escape_string($connection, $_POST["surname"]);
    $phonenumber = mysqli_real_escape_string($connection, $_POST["phonenumber"]);
    $message = mysqli_real_escape_string($connection, $_POST["message"]);


    global $connection ;
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $message = $_POST["message"];
    
    $query = "INSERT INTO contact (name, surname, email, phonenumber, message) VALUES ('$name', '$surname', '$email', '$phonenumber', '$message')";
        
    $result = mysqli_query($connection, $query);
        if(!$result)
        {
        die ("failed");
        }   

}   
?>
