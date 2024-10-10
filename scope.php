<!-- Variable Scope -->

<?php
    //Local scope
    function add()
    {
        $x = 2;
        $y = 3;
        echo($x + $y);
    }
    add();
    // echo $x; //error
?>

<?php
    //Global scope
    $x = 2;
    $y = 3;
    function addG()
    {
        global $x, $y;
        echo($x + $y);
    }
    addG();
?>

<?php
    //Static scope
    function addS()
    {
        static $x = 2;
        $y = 3;
        echo($x + $y);
        $x++;
    }
    addS();
    addS();
    addS();
?>

x