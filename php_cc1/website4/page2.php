<?php
    #eliminar cookie
    //setcookie('username', 'sherydan', time()-3600);

    if (isset($_COOKIE['username'])) {
        echo 'Usuario '. $_COOKIE['username']. ' esta seteado<br>';
    } else {
        echo 'El usuario no esta seteado';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>