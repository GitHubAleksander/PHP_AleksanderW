<?php



function sk($r){
echo 2 * $r;
}

echo "Podaj - (promień koła): ";
$r = (int)readline();
echo "Pole koła wynosi: \n";
sk($r);
?>
