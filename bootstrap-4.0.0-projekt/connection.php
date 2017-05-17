    <?php
    $connection =mysqli_connect('localhost' , 'root', '','testdb2');
        if(!$connection)
        {
            die("failed connection ". mysqli_error());
        }
      
  //  $query = "insert into usertab(username, password) values('$username', '$password')";
  //  mysqli_query($connection, $query);
?>