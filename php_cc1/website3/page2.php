<?php
    session_start();

    $_SESSION['name'] = 'Jhon Doe';
    
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
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
    <div>
        <h2>Hola <?php echo "$name ";  ?> Su email de registro es: <?php echo $email; ?></h2>

        <a href="page3.php">Ir a la pagina 3</a>
    </div>
</body>
</html>