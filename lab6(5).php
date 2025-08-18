<?php
function separate_Vowels_And_Consonants($str) {
    $vowels = "";
    $consonants = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $ch = $str[$i];
        if ($ch == "a" || $ch == "e" || $ch == "i" || $ch == "o" || $ch == "u"|| 
            $ch == "A" || $ch == "E" || $ch == "I" || $ch == "O" || $ch == "U") {
            $vowels .= $str[$i];  
        } else {
            $consonants .= $str[$i];  
        }
    }

    echo "Vowels: " . $vowels . "<br>";
    echo "Consonants: " . $consonants . "<br>";
}

separate_Vowels_And_Consonants("Yeahyea Jam");
?>