<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales</title>
</head>
<body>
    <?php
        /*
        ==
        === (lo mismo que arriba, pero tambien compara tipos de dato)
        <
        >
        <=
        >=
        !=
        !== (no identico, lo mismo que el triple =)

        */
        #condicionales

        $num = 5;
        /*
        if ($num == 5) {
            echo '5 passed';
            # code...
        } elseif ($num == 6){
            echo '6 passed';
        } else{
            echo 'did not pass';
        }

        */

        #logicos
        /*
        and &&
        or ||
        xor     uno de los dos debe ser verdadero, pero no ambos

        */

        if ($num < 4 || $num <6) {
            echo "$num passed <br>";
            
        }

        #switches

        $color = 'blue';

        switch ($color) {
            case 'yellow':
                echo 'your color is yellow';
                break;

            case 'red':
                echo 'your color is red';
                break;    
            
            default:
                echo 'your color is something else';
                break;
        }

    ?>
    
</body>
</html>