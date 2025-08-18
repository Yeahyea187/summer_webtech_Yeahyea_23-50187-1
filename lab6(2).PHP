<?php
function secondMax($arr) {
    $max = $secondMax = $arr[0];
    for($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $secondMax = $max;
            $max = $arr[$i];
        } 
    }
    return $secondMax;
}

echo "Second Maximun Element of array: " . secondMax([1, 2, 3, 4, 5]);
?>