<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        {{ csrf_field() }}
        date1<input type="text" name="date1" id="">
        date2<input type="text" name="date2" id="">
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>