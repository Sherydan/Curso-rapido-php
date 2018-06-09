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
        #substr()
        #retorna el texto desde la primera ocurrencia de un string dado (el indice puede ser negativo o positivo)
        $text = "Hello world";
        //echo substr($text, -2);

        #strpos
        #retorna el indice (posicion) de la PRIMERA ocurrencia de un string dado
        //echo strpos($text, 'o');

        #strlen
        #retorna el tamaño del string
        //echo strlen($text);

        #strrpos()
        #retorna la ULTIMA ocurencia de un string dado
        //echo strrpos($text, 'o');

        #trim()
        #quita espacios en blanco innecesarios dentro de un string
        #tambien es capaz de quitar caracteres innecesarios (comas al principio y al final de un string)
        //echo trim($text, ',');

        #strtoupper()
        #transforma todo el string a mayuscula
        //echo strtoupper($text);

        #strtolower()
        #transforma todo el string en minuscula
        //echo strtolower($text);

        #ucwords()
        #mayuscula al inicio de cada palabra
       // echo ucwords($text);

        #str_replace()
        #reemplaza todas las ocurrencias de una busqueda con un string dado
        /*
        define("_VOCALES", ['a', 'e', 'i', 'o', 'u']);
        $replace = str_replace(_VOCALES,'x', $text);
        
        echo $replace;

        #is_string()
        #verifica si la variable es string o no
        echo is_string($text);
        */

        #gzcompress()
        #comprime un string

        $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi libero laudantium quis consectetur! Illo ut qui neque ullam, ab officiis dicta maxime, esse ipsum quibusdam voluptatibus. Dolorum veniam sed quia libero recusandae est consectetur. Suscipit quos molestiae exercitationem porro dicta. Dolorum molestiae ratione nulla explicabo quam natus sed soluta dignissimos vitae quibusdam magni veniam, maiores, adipisci nobis unde quia voluptatum, aut ab. Ea nihil, sint libero, facilis corrupti at expedita error nobis accusantium ipsa ad nulla distinctio voluptates aspernatur fugiat maiores vero voluptate. Minima sapiente ad ut accusamus! Voluptatem dolorum error culpa ad, ut molestias laudantium vero blanditiis aliquam doloremque!";

        $compressed = gzcompress($string,9);
        echo $compressed;
        echo "<br>";

        echo gzuncompress($compressed);

    ?>

    
</body>
</html>