<?php
    $servername='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($servername,$username,$password,"mydb");
    if(!$conn){
        die('Could not Connect My Sql:' .mysqli_connect_error());
    }
    else{
        echo "Connected";
    }
    $sql="SELECT * FROM mytable";
    ?>