<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
</head>
<body>
    <?php
        echo "<ul>";
            echo "<li>";
                echo "Imię i nazwisko: ".$_POST['name'];
            echo "</li>";
            echo "<li>";
                echo "Twój adres e-mail: ".$_POST['email'];
            echo "</li>";

            if(!(empty($_POST['phone']))) {
                echo "<li>";
                    echo "phone: " . $_POST['phone'];
                echo "</li>";
            }

            echo "<li>";
                 echo "Wybierz temat: ".$_POST['topic'];
            echo "</li>";

            echo "<li>";
                echo "Treść Wiadomości: ".$_POST['message'];
            echo "</li>";


             echo "<li>";
                echo "Treść Wiadomości: ".$_POST['message'];
             echo "</li>";

             echo "<li>";
                 $phone_or_nr="";
                 if (!empty($_POST['email']) && !empty($_POST['phone'])) {
                     $phone_or_nr="E-Mail i Telefon";
                 } else if (!empty($_POST['email'])) {
                     $phone_or_nr = "E-Mail";
                 } else if (!empty($_POST['phone'])) {
                     $phone_or_nr = "Telefon";
                 }
                 echo "Preferowana forma kontaktu: ".$phone_or_nr;
             echo "</li>";



        echo "</ul>";
    ?>

</body>