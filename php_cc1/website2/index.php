<?php include('server_global.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Server & File Info</h1>
        <ul class="list-group">
            <?php if ($server): ?>
                <?php foreach ($server as $key => $value): ?>
                    <li class="list-group-item">
                        <Strong><?php echo "$key: "; ?></Strong>
                        <?php echo $value; ?>

                    </li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
    <br>

    <div class="container">
        <h1>Client Info</h1>
        <ul class="list-group">
            <?php if ($client): ?>
                <?php foreach ($client as $key => $value): ?>
                    <li class="list-group-item">
                        <Strong><?php echo "$key: "; ?></Strong>
                        <?php echo $value; ?>

                    </li>
                <?php endforeach ?>
            <?php endif ?>
        </ul>
    </div>
    





   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>