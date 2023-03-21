
<?php
    function zmiana_słów($zdanie){
        $zakazane_slowo[0] = "Ala";
        $zakazane_slowo[1] = "ma";
        $zakazane_slowo[2] = "kota";
        $zakazane_slowo[3] = "i";

        $delimiter = ' ';
        $tablica_slow = explode($delimiter, $zdanie); // $zdanie = "ALA MA KOTA I KOT MA ALE"

        $rozmiar_tablicy = count($zakazane_slowo);
        foreach($tablica_slow as $slowo) {
            $slowo_jes_zakazane = false;
            for($x = 0; $x < $rozmiar_tablicy; $x++) {
                if(strcmp($slowo, $zakazane_slowo[$x]) == 0) {
                    if($x < $rozmiar_tablicy-1){
                        echo "* ";
                    }else{
                        echo "*";
                    }

                    $slowo_jes_zakazane = true;
                    break;
                }
            }
            if($slowo_jes_zakazane == false) {
                echo $slowo." ";
            }
        }
        // Ala ma kota i kot ma ale
        //  *   *  *   *  kot * ale
    }

    echo "Podaj - (zdanie do ocenzurowania): ";
    $zdanie = readline();
    echo "Oto ocenzurowane zdanie: \n";
    zmiana_słów($zdanie);
 
?>