<?php
    $user = ['name' => 'Luis', 'email' => 'luis@gmail.com', 'password' => '12345'];

    $user = serialize($user);

    setcookie('login_info', $user, time()+3600);

    $user = unserialize($_COOKIE['login_info']);

    print_r($user);

    
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