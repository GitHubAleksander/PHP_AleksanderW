
<?php
if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {
        $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");  // r w
        for ($x_pos = 0, $output = ''; fseek($fileDescriptor, $x_pos, SEEK_END) !== -1; $x_pos--) {
            $output .= fgetc($fileDescriptor);
        }
        fclose($fileDescriptor);
        print_r($output);
    }
}
?>