<?php
/*
 * k = 6
 * 0 1 2 3 4 5 6
 * 1 1 2 3 4 5 6
 * 2 2 4 6 8 10 12
 * 3
 * 4
 * 5
 * 6
 */
function tabliczkaM($bokK){
    for($i = 1; $i <= $bokK; $i++) {
        for($j = 1; $j <= $bokK; $j++){
            $wynik = $i * $j;
            echo $wynik."\t";
        }
        echo "\n";
    }
}

echo "Podaj - (bok k): ";
$bokK = (int)readline();
tabliczkaM($bokK);
?>
