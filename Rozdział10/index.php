<?php


    function createDirectory($Path, $NameOfCatalog, $Privilege){
        $pathToFile = $Path."\\".$NameOfCatalog."\\";
        if($Privilege == "Read") {
            if (is_dir($pathToFile)) {
                $files1 = scandir($Path);
                 print_r($files1);
            }

        }else if($Privilege == "Delete") {
            if (is_dir($pathToFile)) {
                rmdir($pathToFile);
                echo "The directory $NameOfCatalog was successfully deleted.";
            } else {
                echo "The directory $NameOfCatalog wasn't successfully deleted.";
            }
        }else { // create
            if (file_exists($pathToFile)) {
                echo "The directory $NameOfCatalog exists.";
            } else {
                mkdir( $pathToFile, 0755);
                echo "The directory $NameOfCatalog was successfully created.";
            }

        }
    }


    $path = $_POST['path'];

    $NameOfCatalog = $_POST['directory'];
    $Privilege = $_POST['mode'];

    createDirectory($path,$NameOfCatalog, $Privilege);
?>

