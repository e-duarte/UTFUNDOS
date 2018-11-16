<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="/store" method="post">
        {{ csrf_field() }}
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>