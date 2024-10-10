<?php
function findLargestEven($arr) {
    $max = null;
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            if ($max === null || $num > $max) {
                $max = $num;
            }
        }





    }
    return $max;
}

$numbers = [1, 3, 5, 7];
echo findLargestEven($numbers)."<br>";
$numbers1 = [2, 4, 6, 8, 10];
echo findLargestEven($numbers1)."<br>";
$numbers2 = [11, 24, 35, 48, 57];
echo findLargestEven($numbers2)."<br>";
?>