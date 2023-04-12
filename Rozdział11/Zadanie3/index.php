
<?php

function setValue($name, $value)
{
    $this->menuItems[] = array($name, $value);
}

function display(){
    foreach($this->setValue as $item)
    {
        echo '<li><a href="'.$item[1].'">'.$item[0].'</a></li>';
    }

}





if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {




        $menuItems = array();

        $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");  // r w
        $dane = fread($fileDescriptor, 8192);
        fclose($fileDescriptor);


        $tablica = array($dane, ' ');
        // __FUNCTION__
        // echo $dane." ";
    }
}
?>