
<?php
function sumArray($arr) {
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    echo "Sum of the elements: ". $sum;
}

echo sumArray([5, 4, 3, 2, 1]);
?>