<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
 
        if(!$link = mysqli_connect("localhost","root","","testowa")):
            //Udało się połączyć z bazą
            $query = 'SELECT * FROM testowa';
            if($result = mysqli_query($link, $query));
            //Udało się wykonać zapytanie
    ?>
        <table>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
            </tr>
        </table>
    <?php
        //Odczytanie i wyświetlenie danych pobranych z tabeli
        while($raw = mysqli_fetch_row())

            
        
</body>
</html>