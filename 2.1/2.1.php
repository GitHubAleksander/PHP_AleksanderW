<?php

function tablica($index){
    $tablica [0] = rand();
    $tablica [1] = rand();
    $tablica [2] = rand();
    $tablica [3] = rand();
    $tablica [4] = rand();
    $tablica [5] = rand();
    echo "\n";
    echo $tablica[$index];

}

    echo "Podaj - (indeks tablicy): ";
$index = (int)readline();
    echo "wartość elementu tablicy o indeksie podanym jako argument wynosi: \n";
    tablica($index);
?>
