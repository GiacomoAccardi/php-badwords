<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>BadWords</title>
</head>
<body>
    <div class="header">
        <h1>BadWords ***</h1>
    </div>

    <main>
        <p>
            Scrivi un testo, poi scrivi nell'apposito form una parola da censurare!
        </p>

        <div class="form" action="./badwords.php" method="GET">
            <label for="">Paragrafo:</label>
            <textarea name="paragrafo" id="paragrafo" placeholder="Inserisci qui il tuo testo.." class="paragraph"></textarea>
            <label for="">Parola da censurare:</label>
            <textarea name="badword" id="badword" placeholder="Inserisci qui la parola da censurare"></textarea>
            <button type="submit">Invia!</button>
        </div>
    </main>
</body>
</html>