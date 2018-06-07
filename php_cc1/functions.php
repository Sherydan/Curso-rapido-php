<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>
    <?php
        //funcion simple
        function simpleFunction(){
            echo "hello world <br>";
        }

        simpleFunction();

        //funcion con parametros
        function sayHello($name){
            echo "Hello $name";
        }

        sayHello("luis");

        //retornar
        echo "<br>";
        function addNumbers($num1, $num2){
            return $num1 + $num2;
        }

        echo addNumbers(23,22);

        //por referencia
        echo "<br>";

        $numero = 10;
        //sin referencia (no modifica la variable)
        function addFive($num){
            $num += 5;
        }
        //por referencia (modifica la variable)
        function addTen(&$num){
            $num += 10;
        }

        addFive($numero);
        echo "$numero <br>";
        addTen($numero);
        echo $numero;




        


    ?>
    
</body>
</html>