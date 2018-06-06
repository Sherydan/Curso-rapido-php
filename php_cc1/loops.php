<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
    <?php
        #For
        $numbers = [];
        for ($i=0; $i <= 10 ; $i++) { 
            $numbers[] = $i;
            echo "Numero $numbers[$i]";
            echo "<br>";
        }

      

        #while
        $i = 0;

        while ($i <= 10) {
            echo "numero $i";
            echo "<br>";
            $i++;
            
        }

        #do...while
        $a = 0;
        do {
            echo "el numerito es: $a";
            echo "<br>";
            $a++;
        } while ($a <= 10);

        #for each

        $people = array('pedro', 'juan', 'diego');

        foreach ($people as $persona) {
            echo $persona;
            echo "<br>";
            
        }

        $people = ['Pedro' => 'pedrito@gmail.com', 'Juan' => 'juanito@gmail.com', 'Diego' => 'dieguito@gmail.com'];

        foreach ($people as $persona => $email) {
            echo $email;
            echo "<br>";
            
        }



        $arr = [];
        for ($i=0; $i <=10 ; $i++) {
            $arr[] = $i;
            # code...
        }
        

    ?>

        <ul style="list-style-type:none">
            <?php foreach ($arr as $value): ?>
            <li>
                <?php echo $value; ?>
            </li>
            <?php endforeach ?>
        </ul>
        
   
    
    
    
</body>
</html>