<?php
$paragrafo = 'Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura,
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!';


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
        <input type="text" name="subject" id="subject" value="">
    </form>

    <?php $variabileUtente = $_GET['subject'];
    echo ($variabileUtente);
    ?>


    <!-- tampa nuovo paragrafo con censura dell'utente -->
    <div>
        <?php
        echo str_replace($variabileUtente, '***', $paragrafo);
        ?>
    </div>
</body>

</html>