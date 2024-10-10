<?php

session_start();

echo "Welcome : " . $_SESSION['username'] . "<br>";
echo "Your Role is : " . $_SESSION['role'];

?>