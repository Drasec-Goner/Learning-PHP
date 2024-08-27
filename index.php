<?php
    echo 'This is a test<br>'
?>

<?php echo 'This is a test<br>' ?>


<?php 
    $a = 10;
    $b = 20;
    $m = (9 < 5);
    echo gettype($m);
    echo "<br>";
    echo $m;
    echo "<br>";
    echo $a + $b;
    echo "<br>";
?>

<?php
    echo "<br>";
    define('PI', 3.14);
    echo PI;
?>

<?php 
    define("WISHES", "Good Morning");

    function display() {
        echo "<br>";
        echo WISHES;
    }

    display();
?>

<!-- all operators -->



<?php
    $a = 10;
    $b = 20;
    $c = "10";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a == $c);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";
    var_dump($a === $c);
    echo "<br>";
    var_dump($a != $b); // var_dump is used to print the data type of the variable with the value
    echo "<br>";
    $x = null ?? "Hello"; // null coalescing operator
    echo "<br>";
    echo $x;
?>

<?php
    echo $status = $user ?? "Guest";
    echo "<br>";
?>

<?php
    $d = date("D");
    if ($d == "Fri") {
        echo "Have a nice weekend!";
    } else {
        echo "Have a nice day!";
    }
    echo "<br>";
    $h = date("H");
    if ($h < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>


<!-- Loops -->

<?php
    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
?>

<?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
?>

<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?>

<?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach ($age as $x => $val) {
        echo "$x = $val <br>";
    }
?>

<!-- Break -->

<?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }   
?>

<!-- Continue -->

<?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
?>

