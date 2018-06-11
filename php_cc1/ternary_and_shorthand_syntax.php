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
        $array =[1,2,3,4,7];

        $loggedIn = true;
        $retVal = ($loggedIn) ? 'verdadero' : 'falso' ;

        echo $retVal;
    ?>

    <div>
        <?php if ($loggedIn) : ?>
            <h1>Welcome User</h1>
            <?php else : ?>
            <h1>Welcome Guest</h1>
        <?php endif ?>
    </div>

    <div>
        <?php foreach ($array as $val) : ?>
            <li><?php echo $val; ?></li>
        <?php endforeach ?>
    </div>
    <br>
    <div>
        <?php for ($i=0; $i <=10 ; $i++) : ?>
            <li><?php echo $i; ?> </li>
        <?php endfor ?>
    </div>
    
</body>
</html>