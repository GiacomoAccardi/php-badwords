<?php

    //creo una variabile che prenda il varole del form "paragrafo"
    $paragrafo = $_GET['paragrafo'];
    //creo una variabile che prenda il varole del form "badword"
    $badword = $_GET['badword'];

   // var_dump($paragrafo, $badword);

   //censuro:
   $paragrafo_censurato = str_replace($badword, "***", $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>BadWords | Results</title>
</head>
<body>
    <div class="results">
        <h3>Ecco cosa hai inserito:</h2>
        <p>
            <span class="txt-purple">"<?php echo $paragrafo; ?>"</span><br>
            <span>La Lunghezza del tuo paragrafo è di <span class="txt-green"><?php echo strlen($paragrafo); ?></span> caratteri</span>
        </p>

        <h3>Ecco il tuo paragrafo censurato:</h2>
        <p>
            <span class="txt-purple">"<?php echo $paragrafo_censurato; ?>"</span><br>
            <span>La Lunghezza del tuo paragrafo è di <span class="txt-green"><?php echo strlen($paragrafo); ?></span> caratteri</span>
        </p>
    </div>
</body>
</html>