<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST method</title>
</head>
<body>
    <?php
        if(isset($_POST["name"])) {
            echo "<p> Hi, " . $_POST["name"] . "</p>";
        }
    ?>
    <form method="post" action="post-method.php">
        <label for="inputName">Enter your name:</label>
        <input type="text" name="name" id="inputName">
        <button type="submit">Submit</button>
    </form>
</body>