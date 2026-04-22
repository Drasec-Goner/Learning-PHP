<?php

session_start();

if(isset($_SESSION['username'])){
    echo "Welcome : " . $_SESSION['username'] . "<br>";
    echo "Your Role is : " . $_SESSION['role'];
}
else{
    echo "Your session has ended. Please login to continue...";
}

?>