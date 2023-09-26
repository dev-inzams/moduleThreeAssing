<?php
// Task 2: Array Manipulation
$numbers = [1,2,3,4,5,6,7,8,9,10];

function reEvenNum($numbers) {
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }

    $numbers = array_values($numbers);

    print_r($numbers);
}
reEvenNum($numbers);

?>