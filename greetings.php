<!-- 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo (si può usare una textarea?) ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all'utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<?php
    /* associo una variabile al valore dato dall input */
    $mio_paragrafo = $_GET["paragrafo"];
    $mia_parola = $_GET["parola"];
    /* sostituisco con la funzione il valore della stringa indesiderata */
    $paragrafo_censured = str_replace($mia_parola, "***", $mio_paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati</title>
</head>
<body>
    <h1>Dati ricevuti</h1>
    <!-- con echo stampo i valori -->
    <p>Il testo è: "<?php echo $mio_paragrafo;?>"</p>
    <p>La lunghezza del testo è: "<?php echo strlen($mio_paragrafo);?>"</p>
    <p>Il testo censurato è: "<?php echo $paragrafo_censured;?>"</p>

</body>
</html>

