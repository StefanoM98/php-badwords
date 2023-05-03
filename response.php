<?php
$text = $_GET['text'];
$badword = $_GET['badword'];
$censored = '***';
$badword_text = str_replace($badword, $censored, $text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWord</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>Testo Originale</h2>

    <?php
    echo "Il tuo testo è lungo: " . strlen($text) . " caratteri"
    ?>
    <p>
        <?php
        echo $text
        ?>
    </p>
    <h2>Questo invece è il tuo testo ma con la parola che hai voluto censurare</h2>

    <?php
    echo "Il tuo nuovo testo è lungo: " . strlen($badword_text) .  " caratteri"
    ?>
    <p>
        <?php
        echo $badword_text
        ?>
    </p>
</body>

</html>