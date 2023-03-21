<?php

function czytajPesel($pesel) {
    $dzien = substr($pesel,4,2);
    $miesiac = substr($pesel,2,2);
    $rok = substr($pesel,0,2);

    /*
     * Jezeli miesiac: [0]: 0 lub 1 -> 1900
     * Jezeli miesiac: [0]: 8 lub 9 -> 1800
     * Jezeli miesiac: [0]: 2 lub 3 -> 2000$
     * Jezeli miesiac: [0]: 5 lub 4 -> 2100
     * Jezeli miesiac: [0]: 6 lub 7 -> 2200
     */
    if (substr($miesiac, 0, 1) == '0' || substr($miesiac, 0, 1) == '1'){
        $stulecie = 1900;
    }
    if (substr($miesiac, 0, 1) == '8' || substr($miesiac, 0, 1) == '9'){
        $stulecie = 1800;
    }
    if (substr($miesiac, 0, 1) == '2' || substr($miesiac, 0, 1) == '3'){
        $stulecie = 2000;
    }
    if (substr($miesiac, 0, 1) == '5' || substr($miesiac, 0, 1) == '4'){
        $stulecie = 2100;
    }
    if (substr($miesiac, 0, 1) == '6' || substr($miesiac, 0, 1) == '7'){
        $stulecie = 2200;
    }

    if($stulecie == '2000') {
        $miesiac = $miesiac - 20;
    }
    if($stulecie == '1800') {
        $miesiac = $miesiac - 80;
    }
    if($stulecie == '2100') {
        $miesiac = $miesiac - 40;
    }
    if($stulecie == '2200') {
        $miesiac = $miesiac - 60;
    }
    $rok = $stulecie + substr($pesel, 0, 2);
    $data = $dzien."-".$miesiac."-".$rok;
    return $data;
}

    echo "Podaj pesel";
    $pesel = readline();
   // $pesel = "93080712345";
    echo "\n";
    $data = czytajPesel($pesel);
    echo $data;
?>