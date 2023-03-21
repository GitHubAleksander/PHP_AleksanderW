<?php

function zworc_narodowosc($kraj) {
    $narodowosci = array ("usa" => "Amerykanin", "polska" => "Polak");
    if (array_key_exists(strtolower($kraj), $narodowosci)) {
        echo $narodowosci[strtolower($kraj)];
    } else {
        echo "Narodowosc nie istnieje";
    }
}

echo "Podaj - (kraj): ";
$kraj = readline(); // nazwa kraju // USA
echo "Odpowiednia narodowość to: \n";
zworc_narodowosc($kraj);

?>
