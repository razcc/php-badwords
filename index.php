<?php
$paragrafo = 'Nel mezzo';

// Lunghezza stringa
$varLunghezza = strlen($paragrafo);

// !Scelta parola utente tramite input
// $variabileUtente = $_GET['subject'];

// Paragrafo Censurato con il replace
$paragrafoCensurato = str_replace($_GET['censura'], '***', $paragrafo);

$varNuovaLunghezza = strlen($paragrafoCensurato);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Paragrafo -->
    <div>
        <p>
            <?php
            echo ($paragrafo);
            ?>
        </p>

        <!-- Stampa Lunghezza -->
        <pre>
            <?php
            echo ($varLunghezza);
            ?>          
        </pre>
    </div>





    <!-- Input -->
    <!-- <form name="form" method="get">
        <input type="text" name="subject" id="subject" placeholder="parola da censurare">
    </form> -->




    <!-- tampa nuovo paragrafo con censura dell'utente -->
    <div>
        <?php
        echo ($paragrafoCensurato);
        ?>

        <pre>
            <?php
            echo ($varNuovaLunghezza);
            ?>
        </pre>
    </div>
</body>

</html>