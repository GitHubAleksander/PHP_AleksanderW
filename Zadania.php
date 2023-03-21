<?php
function symulacja(){
    echo rand(1,10);
}
?>


<?php
function średnica($a){
    echo 2* $a;
}
?>


<?php
    function zmiana_słów($b){
    $tablica[0] = "dane";
    $tablice[1] = "dane2";
    $tablica[2] = "dane3";
    foreach ($tablica as $element) {
        if(substr_compare($tablica[$element], $b) == 0){
            echo $tablica[$element];
        }
    }
}
?>
<?php

symulacja();


echo "\nPodaj promień koła: ";
$a = (int)readline();
średnica($a);


echo"\nPodaj zdanie do ocenzurowania: ";
$b = readline(); // to jest typu string
zmiana_słów($b);

?>