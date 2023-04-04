<?php


    function factorialRecurrent($number){

       if($number < 2){
           return 1;
       } else {
           return factorialRecurrent($number-1) * $number;
       }
    }

    function factorialIterative($number) {  // 4
        if($number < 2){
            return 1;
        }

        $silnia = 2;
        for($i = 3; $i <= $number; $i = $i + 1){
            $silnia *= $i;
        }
        return $silnia;
    }



    echo "Get a number: ";
    $number = (int) readline();

    echo "Factorial recursion: ";
    echo "\n";

    $TimeStart = microtime(true);  // start mieżenia czasu
    $recFactorial = factorialRecurrent($number);
    $TimeEnd = microtime(true);    // koniec mierzenia czasu

    echo "Result ".$recFactorial." time: ",($TimeEnd - $TimeStart)."\n";

    $oneTime = ($TimeEnd - $TimeStart);
    echo "Factorial iterative: ";
    echo "\n";

    $TimeStart = microtime(true);  // start mieżenia czasu
    $iterFactorial = factorialIterative($number);
    $TimeEnd = microtime(true);    // koniec mierzenia czasu

    $twoTime = ($TimeEnd - $TimeStart);
    echo "Result ".$iterFactorial." time: ",($TimeEnd - $TimeStart)."\n";

    if ($oneTime > $twoTime){
        echo "Iterative Function is faster about ".($oneTime - $twoTime);
    }else {
        echo "Recursion Function is faster about ".($twoTime - $oneTime);
    }


//$czas = time(factorialRecurrent($number));

?>
