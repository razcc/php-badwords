<?php
$paragrafo = 'Nel mezzo';


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

    </div>

    <!-- Stampa Lunghezza -->
    <div>
        <pre>
            <?php
            var_dump($paragrafo);

            ?>

        </pre>
    </div>

    <!-- Input -->
    <form name="form" method="get">
        <input type="text" name="subject" id="subject" placeholder="parola da censurare">
    </form>

    <?php $variabileUtente = $_GET['subject'];
    echo ($variabileUtente);
    ?>


    <!-- tampa nuovo paragrafo con censura dell'utente -->
    <div>
        <?php
        $paragrafoCensurato = str_replace($variabileUtente, '***', $paragrafo);
        echo ($paragrafoCensurato);
        ?>

        <pre>
            <?php
            echo var_dump($paragrafoCensurato);
            ?>
        </pre>
    </div>
</body>

</html>