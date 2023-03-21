<?php


function czyPierwsza($liczba){

    $iteracje = 0;
    if($liczba < 2){
        echo "Liczba nie jest liczbą pierwszą: \n";
    }else {
        for($i = 2; $i < $liczba; $i++){

            if($liczba % $i == 0){

                echo "Liczba nie jest liczbą pierwszą: \n";
                return;
            }
            $iteracje++;
        }
        echo "Liczba jest liczbą pierwszą: \n";
    }
}

echo "Podaj - (liczbę) \n";
$liczba = (int)readline();

czyPierwsza($liczba);
?>
