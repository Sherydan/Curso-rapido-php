<?php
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);

        header("Location:page2.php");
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

    <div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="username" id="username" placeholder="usuario">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
    
</body>
</html>