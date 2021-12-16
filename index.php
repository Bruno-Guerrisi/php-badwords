<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inizio php</title>
</head>
<body>

    <!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <!-- PHP -->
    <?php

        /* stringa titolo */
        $title = 'Benvenuto in questo esercizio in cui utilizzo php';

        $censured = $_GET['name'];

        $titleCensured = str_replace($censured, '***', $title)

    ?>

    <!-- HTML -->

    <h1>

        <?php  echo $title; ?>
    </h1>

    <p>
        lunghezza titolo:
        <?php echo strlen($title); ?>
    </p>

    <form action="">
        <input type="text" placeolder="inserire parola da censurate">
    </form>

    <h2>
        <?php echo $titleCensured; ?>
    </h2>

    <p>
        lunghezza titolo due:
        <?php echo strlen($titleCensured); ?>
    </p>

</body>
</html>