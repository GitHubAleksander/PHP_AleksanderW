<?php


function TR(){
    echo "Podaj - (długość podstawy): ";
$a = (int)readline();

    echo "Podaj - (długość wysokości): ";
$h = (int)readline();

     echo "Pole trójkąta wynosi: ";
     echo ($a * $h)/2;
}


function PR(){
    echo "Podaj - (długość boku a): ";
$a = (int)readline();

    echo "Podaj - (długość boku b): ";
$b = (int)readline();

    echo "Pole prostokąta wynosi: ";
    echo $a * $b;
}
function TRAPEZ(){
    echo "Podaj - (podstawę górną trapezu): ";
$a = (int)readline();

    echo "Podaj - (podstawę dolną trapezu): ";
$b = (int)readline();

    echo "Podaj - (wysokość trapezu): ";
$h = (int)readline();
    echo "Pole trapezu wynosi: ";
    echo ($a * $b * $h)/2;

}



    echo "Jaką figurę chcemy obliczyć (trójkąt, prostokąt, trapez)? ";
$figóra = readline();

switch ($figóra) {
    case "trójkąt":
        TR();
        break;
    case "prostokąt":
        PR();
        break;
    case "trapez":
        TRAPEZ();
        break;
}
?>