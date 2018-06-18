<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $dbname = 'blog';

    $dsn = 'mysql:host='.$host.';dbname='.$dbname;

    $options = array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES => FALSE
    );

    #crear instancia PDO

    $pdo = new PDO($dsn, $user, $password, $options);

    #QUERY
    /*
    $stmt = $pdo->query('SELECT * FROM tbl_post');

    while ($row = $stmt->fetch()) {
        echo $row->title. '<br>';
    }
    

    #PREPARED STATEMENTS (prepare y execute)
    $author = 'Luis';
    $id = 25;
    $sql = 'SELECT * FROM tbl_post WHERE author = ? && id=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author, $id]);
    $post = $stmt->fetchAll();

    var_dump($post);
    

    #FETCH SINGLE
    $id = 25;
    $sql = 'SELECT * FROM tbl_post WHERE id= :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=> $id]);
    $post = $stmt->fetch();

    var_dump($post);
    

    #ROW COUNT
    $author = 'Luis';
    $stmt = $pdo->prepare('SELECT * FROM tbl_post WHERE author= ?');
    $stmt->execute([$author]);
    echo $stmt->rowCount();
    

    #INSERTAR DATOS
    $title = 'PDO POST';
    $body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, laboriosam!';
    $author = 'Luis';

    $sql = 'INSERT INTO tbl_post(title, body, author) VALUES(:title, :body, :author)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title'=> $title, 'body'=> $body, 'author'=> $author]);
    

    #ACTUALIZAR DATOS
    $id = 14;
    $author = 'Luis';

    $sql = 'UPDATE tbl_post SET author = :author WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['author'=> $author, 'id'=>$id]);

    

    #ELIMINAR DATOS
    $id = 14;
    $sql = 'DELETE FROM tbl_post WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    */

    #BUSCAR DATOS
    $search = '%PDO%';
    $sql = 'SELECT * FROM tbl_post WHERE title LIKE ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);

    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        echo $post->title.'<br>';
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