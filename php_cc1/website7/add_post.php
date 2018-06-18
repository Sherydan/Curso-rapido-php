<?php require_once('config/config.php'); ?>
<?php require_once('config/db.php'); ?>
<?php

    if (filter_has_var(INPUT_POST, 'submit')) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        $query = "INSERT INTO tbl_post(author, body, title) VALUES ('$author', '$body', '$title')";

        if (mysqli_query($conn, $query)) {
            header("Location: ".ROOT_URL);
            # code...
        } else {
            echo "ERROR ". mysqli_error($conn);
        }
    }

?>


<?php require_once('inc/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Añadir Post</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="body" id="body" class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" value="Aceptar" name="submit" class="btn btn-primary">
                </div>
               
            </form>
        </div>
    </div>
</div>

<?php require_once('inc/footer.php'); ?>