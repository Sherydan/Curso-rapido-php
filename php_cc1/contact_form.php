<?php
    $msg = '';
    $msgClass = '';
    
    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        
        
        if (!empty($email) && !empty($name) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Por favor ingrese un email valido';
                $msgClass = 'alert-danger';
            } else {
                $toEmail = 'support@tobar.cl';
                $subject = 'Solicitud de contacto de: '.$name;
                $body = "<h2>Solicitud de contacto</h2>
                        <h4>Nombre</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Mensaje</h4><p>'.$message.'</p>";

                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:Text/html;charset=UTF-8" ."\r\n";
                $headers .= "From: ".$name. "<".$email.">". "\r\n";

                if (mail($toEmail,$subject,$body,$headers)) {
                    $msg = 'Email enviado';
                    $msgClass = 'alert-succsess'; 
                } else {
                    $msg = 'Error al enviar el mail';
                    $msgClass = 'alert-danger'; 
                }
            }
            
        } else {
            $msg = 'Por favor rellene todos los campos';
            $msgClass = 'alert-danger'; 
        }

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>

             <div class="form-group">
                <label>Mensaje</label>
                <textarea name="message" id="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <?php if ($msg) : ?>
                <div class="alert <?php echo $msgClass; ?> alert-dismissible fade show" role="alert"> <?php echo $msg; ?> 
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif ?>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>



        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

</body>

</html>