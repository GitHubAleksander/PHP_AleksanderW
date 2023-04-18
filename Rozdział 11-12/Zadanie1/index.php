
<html>
<head>
    <title>
        Data retrieval
    </title>
</head>
<body>
<h1>Customer's data</h1>
<form method="post">
<?php
    session_start();
    if (!isset($_SESSION['credit_card_number'])) {
        $_SESSION['credit_card_number'] = $_POST['credit_card_number'];
    }
    if (!isset($_SESSION['client_data'])) {
        $_SESSION['client_data'] = $_POST['client_data'];
    }
    if (!isset($_SESSION['number_of_client'])) {
        $_SESSION['number_of_client'] = $_POST['number_of_client'];
    }
    for ($i = 0; $i < $_SESSION['number_of_client']; $i++){
        $nameOrSurname = "nameOrSurname".($i);
        echo $nameOrSurname;
        echo "<h2>Enter user details nr $i</h2>";
        echo '<p>Name and Surname: </p><input type="text", name =$nameOrSurname>';
        echo '</br>';
    }

    if(isset($_POST['SafeToSession'])){
       // echo $_POST['nameAndSurname'];
        for ($i = 0; $i < $_SESSION['number_of_client']; $i++) {
            $nameOrSurname = "nameOrSurname".($i);
            $client = $_POST[$nameOrSurname];
            echo $client;
        }
    }

?>
    <input type = "submit", class="button", name = "SafeToSession", value="SafeToSession">
</form>
<form method="post" action="third.php">
    <input type="submit" name="submit" value="Pokaż podsumowanie">
</form>
</body>
</html>