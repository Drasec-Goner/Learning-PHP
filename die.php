<?php
if(file_exists("myfile.txt")){
    $file = fopen("myfile.txt", "r");
}
else{
    die("Error: The file does not exist.");
}
?>