<?php
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : $_SESSION['name'] = 'Visita';
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
    <h1>Hola <?php echo $name ?></h1>
    <a href="page4.php">Ir a la pagina 4</a>
    <br>
    <a href="sessions.php">Ir al inicio</a>
</body>
</html>