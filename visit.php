<?php

$cookie_name = "user";

if(isset ($_COOKIE[$cookie_name])){
    echo "Cookie named '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
else{
    echo "Cookie named '" . $cookie_name . "' is not set!";
}

?>

