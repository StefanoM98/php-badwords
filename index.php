<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWord</title>
</head>

<body>
    <form action="response.php">
        <label for="text">Scrivi un testo</label>
        <textarea name="text" id="text" cols="30" rows="8" placeholder="Inserisci qui il tuo testo..."></textarea>
        <label for="badword">Iscerisci qui la parola che vorresti censurare</label>
        <input type="text" name="badword" id="badword" placeholder="Inserisci la tua parola">
        <button type="submit">Censura</button>
    </form>
</body>

</html>