<?php

if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {

        $otherLink = false;

        $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");  // r w
        $dane = fread($fileDescriptor, 8192);  // naszew dane z pliku
        fclose($fileDescriptor);

        $o8= 0;
        $search8 = 0; // d


        $dl = strlen($dane);

        $data = $_SERVER['REMOTE_ADDR'];

        for($i = 0; $i < $dl; $i++){
            if($o8 < 9){
                if($dane[$i] == $data[$o8]){
                    $search8++;
                }
                $o8++;
            }else{

                if($search8 == 8){
                    $otherLink = true;
                }
                $o8 = 0;
                $search8 = 0;
            }


            if($otherLink == true){
                break;
            }
        }

        if($otherLink == true){
            header('Location: https://multikino.pl');
        }else{
            header('Location: https://www.google.pl');
        }

    }
}
?>