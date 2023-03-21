<?php
function tablicaLosowychL($const_dl,$wykonywanie, $max, $tablica, $rozmiar_tablicy){


    if($wykonywanie == $const_dl){
        echo $max;
        return;
    }
    if($rozmiar_tablicy == 0){ // rozmiar tablicy = poczontkowe
        $rozmiar_tablicy = $const_dl;
        $wykonywanie+=1;
    }

    if($tablica[$rozmiar_tablicy-1] > $max) {
        $max = $tablica[$rozmiar_tablicy-1];
    }

    tablicaLosowychL($const_dl,$wykonywanie, $max, $tablica, $rozmiar_tablicy-1);

}

$tablica [0] = rand();
$tablica [1] = rand();
$tablica [2] = rand();
$tablica [3] = rand();
$tablica [4] = rand();
$tablica [5] = rand();

$rozmiar_tablicy = count($tablica)-1;

echo "Oto - tablica losowych liczb: \n";
for($x = 0; $x <= $rozmiar_tablicy; $x++){
    echo $tablica[$x];
    echo "\n";
}
echo "\n";
echo "\n";

$max = 0;

$const_dl =  count($tablica)-1;;
$wykonywanie = 0; // powturzenia

echo "Maksymalny element tablicy losowych liczb: \n";
tablicaLosowychL($const_dl,$wykonywanie, $max, $tablica, $rozmiar_tablicy);

?>
