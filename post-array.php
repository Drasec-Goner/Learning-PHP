<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the array from the form
    $array = $_POST['array'];

    // Convert the string into an array
    $array = explode(',', $array);
    
    // Sort the array
    sort($array);

    // Display the sorted array
    echo "Sorted Array: ";
    foreach ($array as $value) {
        echo $value . " ";
    }
}
?>

<form method="post" action="">
    <label for="array">Enter array elements (comma-separated):</label><br>
    <input type="text" name="array" id="array"><br>
    <input type="submit" value="Sort">
</form>