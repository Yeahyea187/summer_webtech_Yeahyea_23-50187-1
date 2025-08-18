<?php
function reverseString($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
            
    }
    echo $reversed;
}
reverseString("Yeahyea Jam");
?>