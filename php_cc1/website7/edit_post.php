<?php
     require_once('config/config.php');
     require_once('config/db.php');

    if (filter_has_var(INPUT_POST, 'submit')) {
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "UPDATE tbl_post SET title='$title', author='$author', body='$body' WHERE id = {$update_id}";

        if (mysqli_query($conn, $query)) {
            header("Location: ".ROOT_URL);
            # code...
        } else {
            echo "ERROR ". mysqli_error($conn);
        }
    }


   
    $id =  mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM tbl_post WHERE id='.$id;

    $result = mysqli_query($conn, $query);

    $post = mysqli_fetch_assoc($result);

    mysqli_free_result($result);

    mysqli_close($conn);
?>

<?php require_once('inc/header.php'); ?>
<?php require_once('inc/nav.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Edit Post</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title']; ?>">
                </div>

                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" name="author" id="author" class="form-control" value="<?php echo $post['author']; ?>">
                </div>

                <div class="form-group">
                    <textarea name="body" id="body" class="form-control"><?php echo $post['body']; ?></textarea>
                </div>
                <div class="text-center">
                    <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
                    <input type="submit" value="Aceptar" name="submit" class="btn btn-primary">
                </div>
               
            </form>
        </div>
    </div>
</div>




<?php require_once('inc/footer.php'); ?>