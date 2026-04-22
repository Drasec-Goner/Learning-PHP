<!DOCTYPE html>
<html>
<head>
    <title>Ca Test</title>
</head>
<body>
    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Find Position</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];
        $word = "important";
        $position = strpos($inputString, $word);

        if ($position !== false) {
            echo "<p>The word 'important' is found at position: " . $position . "</p>";
        } else {
            echo "<p>The word 'important' is not found in the string.</p>";
        }
    }
    ?>
</body>
</html>