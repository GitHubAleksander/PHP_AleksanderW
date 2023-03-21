<?php
function losowy_rzut($liczba){


    for($x = 1; $x <= $liczba; $x++){
        echo $x."Rzut kostką: ".rand(1, 6)."\n";
    }

}

    echo "Podaj - (liczbę rzutów kostką): \n";
$liczba = (int)readline();
    echo "Tablica wyników: \n";
losowy_rzut($liczba);
?>

