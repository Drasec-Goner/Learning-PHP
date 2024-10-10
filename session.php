<?php
    //Step 1: Start the session
    session_start();

    //Step 2: Set some session variables
    $_SESSION["username"] = "JohnDoe";
    $_SESSION["role"] = "admin";

    //Step 3: Display the session variables
    echo "Session started. The username is " . $_SESSION["username"] . " and the role is " . $_SESSION["role"] . "<br>";

    print_r($_SESSION);
    echo "<br>";
    unset($_SESSION["role"]);

    print_r($_SESSION);
    echo "<br>";
    //Step 4: Unset all session variables (clear all session variables)
    // session_unset();

    //Step 5: Destroy the session
    session_destroy();

    //Step 6: Try to access the session variables after the session is destroyed
    if(empty($_SESSION)) {
        echo "Session variables are now cleared and the session is destroyed"."<br>";
    } else {
        echo "Session variables are still active"."<br>";
    }

    //Step 7: Check for session
    if(session_status() == PHP_SESSION_NONE) {
        echo "Session is not active"."<br>";
    } else {
        echo "Session is active"."<br>";
    }
?>