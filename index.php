<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Validar </title>
</head>
<body>
    <form method="POST" action="outra.php" onsubmit="return validaemail1(this)">
        <h3>Validação De E-mail</h3>
        <label>Digite Seu E-mail:</label>
        <input type="texto" name="email">
        <input type="submit" value="Validar">
    </form>
</body>
</html>