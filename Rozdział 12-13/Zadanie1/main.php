
    <html>
    <head>
        <title>
            Data retrieval
        </title>
    </head>
    <body>
    <h1>Customer's data</h1>
    <form action="index.php" method="post">
        <ul>
            <li>
                Card number *
                <input type="text" name="credit_card_number" required placeholder="Card number">

            <li>
                Ordering Party's data *
                <input type="text" name="client_data" required placeholder="Ordering Party's data">
            </li>
            <li>
                Number of people *
                <input type="number" name="number_of_client" required placeholder="Number of people">
            </li>
        </ul>

        <br>
        <input type="submit" name="submit" value="Wyślij formularz">
        <br>
    </form>
    </body>
    </html>