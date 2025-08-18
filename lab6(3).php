<?php
function right_Angled_Star_Triangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
right_Angled_Star_Triangle(5);
?>