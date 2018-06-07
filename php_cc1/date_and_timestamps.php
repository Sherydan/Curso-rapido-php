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
        //mostrar seleccionar la zona horaria correcta
        date_default_timezone_set('America/Santiago');
        //mostrar fecha de acuerdo a una plantilla
        echo date('d/m/Y');
        echo "<br>";
        echo date('i:h:sa');
        echo "<br>";
       
        //mostrar y maquetar fecha de acuerdo a una fecha antes dada
        $timestamp = mktime(10,14,54,6,25,1992);
        echo date("d/m/Y i:h:s a", $timestamp);
        echo "<br>";

        //mostrar fecha de acuerdo a un string antes dado
        $timestamp2 = strtotime('next year');
        echo date('d/m/Y', $timestamp2);

    ?>
    
</body>
</html>