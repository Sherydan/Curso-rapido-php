<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos</title>
</head>
<body>
    <?php
        define("br","<br>", true);
        #Indexeados
        $people = array('luis', 'antonio', 'tobar');
        $rut = array('11','22','33');
        $cars = ['subaru', 'honda', 'toyota'];

        print_r($people);
        echo br;
        var_dump($rut);
        echo br;
        echo $cars[0];
        echo br;
        //añadir un elemento, puede contener el indice o no.
        $cars[] = 'BMW';
        print_r($cars);
        echo br;

        #Asociativos
        //al crear un array del mismo nombre, se sobre escribe el anterior
        $people = ['llave' => 'dato', 'Luis' => 25, 'Toyota' => 2014];
        echo $people['llave'];
        echo br;
        //agregar datos
        $people['llave2'] = 'dato2';
        print_r($people);

        #Multidimensional
        $cars = array(
            array('subaru', 23, 3),
            array('ford', 3, 1),
            array('BMW', 2, 0)
        );
        echo br;
        echo $cars[2][2];

        echo br;
        print_r($cars);



    ?>
</body>
</html>