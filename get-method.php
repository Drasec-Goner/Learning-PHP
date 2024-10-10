<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Method</title>
</head>
<body>
    <?php
    if(isset($_GET["name"])) {
        echo "<p>Hi, " . $_GET["name"] . "</p>";
    }
    ?>
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>