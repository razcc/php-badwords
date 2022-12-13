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
    <div>
        <h3>
            <?php
            echo ($paragrafo);

            ?>
        </h3>

    </div>

    <div>
        <p>
            <?php
        var_dump($paragrafo);

        ?>

        </p>
    </div>
</body>

</html>