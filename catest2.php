<!DOCTYPE html>
<html>
<head>
    <title>Append to File</title>
</head>
<body>
    <form method="post" action="">
        <label for="newText">Enter text to append:</label>
        <input type="text" id="newText" name="newText" required>
        <input type="submit" value="Append">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newText = $_POST['newText'];
        $file = 'notes.txt';

        if (file_put_contents($file, $newText . PHP_EOL, FILE_APPEND) !== false) {
            echo "Text appended successfully!";
        } else {
            echo "Failed to append text.";
        }
    }
    ?>
</body>
</html>