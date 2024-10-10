<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST method</title>
</head>
<body>
    
    <?php
    $name = $email = $gender = $comment = $website = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>


    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputName">Name:</label>
            <input type="text" name="name" id="inputName">
            <br><br>
            <label for="inputEmail">E-mail:</label>
            <input type="text" name="email" id="inputEmail">
            <br><br>
            <label for="inputWebsite">Website:</label>
            <input type="text" name="website" id="inputWebsite">
            <br><br>
            <label for="inputComment">Comment:</label>
            <textarea name="comment" id="inputComment" rows="5" cols="40"></textarea>
            <br><br>
            <label for="inputGender">Gender:</label>
            <!-- make radio for male female and others -->
            <input type="radio" name="male" id="input">
            <input type="radio" name="female" id="input">
            <input type="radio" name="others" id="input">
            <br><br>
            <button type="submit">Submit</button>
    </form>
    <br>
    <h2>Your Input:</h2>
    <?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $comment = test_input($_POST["comment"]);
        $website = test_input($_POST["website"]);
    }

    if(empty($_POST["name"])) {
        echo "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            echo "Only letters and white space allowed";
        }
    }
    if(empty($_POST["email"])) {
        echo "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }
    }
    if(empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            echo "Invalid URL";
        }
    }
    if(empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST["gender"]) {
        $gender = "";
    } else {
        $gender = test_input($_POST["gender"]);
        if
    }
    ?>
</body>
</html>

