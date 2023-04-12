<?php
if(file_exists("licznik.txt")){
    $fileDescriptor = fopen("licznik.txt", "r");
    $dane = fread($fileDescriptor, 8192);
    fclose($fileDescriptor);
    $dane++;

    $file = "licznik.txt"; // przypisanie zmiennej $file nazwy pliku

    $fp = fopen($file, "a");// uchwyt pliku, otwarcie do dopisania

    flock($fp, 2); // blokada pliku do zapisu


    // to trzeba zrobić w twoim pliku
    file_put_contents('licznik.txt', '');
    fwrite($fp, $dane); // zapisanie danych do pliku


    flock($fp, 3); // odblokowanie pliku

    fclose($fp); // zamknięcie pliku
    echo "The data has been saved!<br/>";

}else {
    $myfile = fopen("licznik.txt", "w");

    $file = "licznik.txt";
    $fp = fopen($file, "a");// uchwyt pliku, otwarcie do dopisania
    flock($fp, 2); // blokada pliku do zapisu
    file_put_contents('licznik.txt', '');
    fwrite($fp, 1); // zapisanie danych do pliku
    flock($fp, 3); // odblokowanie pliku

    fclose($fp); // zamknięcie pliku
    echo "The data has been saved!<br/>";
}
?>