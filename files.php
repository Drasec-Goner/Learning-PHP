<?php

$fptr = fopen("myfile.txt", "w");

fwrite($fptr, "This is the content using fwrite.");


fclose($fptr);

?>