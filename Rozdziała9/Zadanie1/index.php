<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
</head>
<body>
    <?php


    /*
     * strtotime($date))    zmiana daty na inny czas x-owy
     * z tego tworzymy datę o określonym formacie
     * 1992-12-12 -> (cofam sie). Tworze sobie aktualny czas nm podstawie datay (cofam sie)
     * konwertuje moje cofniecie na date: stworzeni dany,
     */
    function CalculateDayOfWeek($dateOfBirth){

        $day = date('w', strtotime($dateOfBirth)); // 2023-04.04
        $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $dayOfweek = date('d-m-Y', strtotime($dateOfBirth))." ($days[$day])";
        return $dayOfweek;
    }

    function CalculateAge($dateOfBirth){
        $date = new DateTime($dateOfBirth);
        $today = new Datetime();
        $diff = $today->diff($date); // różnica pomiędzy tatami

        return $diff->y;
    }

    function CalculateDaysToBirth($dateOfBirth){
        $birthday = strtotime($dateOfBirth);
        $now = time();
        $datediff = $now - $birthday;
        $daysRemaining = floor($datediff/(60*60*24));
        return $daysRemaining;
    }


    echo "<ul>";
    echo "<li>";

    echo "Data: ".$_GET['dateValue'];
    echo '<br>';

    $dateOfBirth = $_GET['dateValue'];
    echo "Day of week".CalculateDayOfWeek($dateOfBirth).'<br>';
    echo "Age ".CalculateAge($dateOfBirth).'<br>';
    echo "Birth ".CalculateDaysToBirth($dateOfBirth).'<br>';

    ?>

</body>