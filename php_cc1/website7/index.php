<?php
    require_once('config/config.php');
    require_once('config/db.php');

    $query = "SELECT * FROM tbl_post ORDER BY created_at DESC";

    $result = mysqli_query($conn, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);
?>
<?php require_once('inc/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            
            <br>
            <?php foreach($posts as $post):?>
            <div class="card mb-3">
                <h5 class="card-header text-center">
                    <?php echo $post['title']; ?>
                </h5>

                <div class="card-body">
                    <p class="card-text">
                        <?php echo $post['body']; ?>
                    </p>
                    <div class="text-center">
                        <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Ir al post</a>
                    </div>


                </div>

                <div class="card-footer text-muted">
                    <p>Autor:
                        <?php echo $post['author'];?>
                    </p>
                    <p>Creado:
                        <?php echo $post['created_at']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach ?>


        </div>

    </div>
</div>

<?php require_once('inc/footer.php'); ?>