<?php
    function add(int $x, int $y)
    {
        echo($x + $y);
    }
    // add(2, "3 semesters"); //error
    add(2, 3);
?>

<?php
    //Call by value
    function addV($a, $b)
    {
        $a += $b;
    }
    $x = 2;
    $y = 3;
    addV($x, $y);
    echo $x;
?>

<?php
    //Call by reference
    function addR(&$a, &$b)
    {
        $a += $b;
    }
    $x = 2;
    $y = 3;
    addR($x, $y);
    echo $x;
?>

<?php
    //Default argument
    function addD($a, $b = 3)
    {
        echo($a + $b);
    }
    addD(2);
?>


