<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $link = mysqli_connect("127.0.0.1", "root","","kansik");
    if ($link) echo "Sukces";
    else echo "błąd";
    mysqli_close($link);
?> 
</body>
</html>