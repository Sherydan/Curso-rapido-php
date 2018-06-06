<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php
        #VARIABLES
        define("BR", "<br>", true);
        
        $output = "Hello World";
        echo $output;
        echo br;

        $num1 = 3;
        $num2= 4.1;
        $result = $num1 * $num2;
        echo $result;
        echo br;

        $string1 = "hello";
        $string2 = "world";
        $concat = $string1. " ".$string2;
        echo $concat;
        echo br;
        echo "$string1 $string2";

    ?>
    
</body>
</html>
