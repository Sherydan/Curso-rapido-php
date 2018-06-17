<?php
    require_once('config/config.php');
    require_once('config/db.php');
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
            <br>
            <div class="card mb-3">
                <h5 class="card-header text-center">
                    <?php echo $post['title']; ?>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $post['body']; ?>
                    </p>
                    <div class="text-center">
                        <a href="index.php" class="btn btn-primary">Atras</a>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <p>Autor:
                                <?php echo $post['author'];?>
                            </p>
                            <p>Creado:
                                <?php echo $post['created_at']; ?>
                            </p>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="text-right" id="edit-post">
                                
                                <a href="edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-secondary ">Editar</a>
                                <form id="delete-form" action="delete_post.php" method="post" >
                                    <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                                    <input type="submit" value="Eliminar" name="delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
        $(document).ready(function () {
            var alterClass = function () {
                var ww = document.body.clientWidth;
                if (ww <= 768) {
                    $('#edit-post').removeClass("text-right").addClass('text-center');
                } else if (ww > 768) {
                    $('#edit-post').removeClass("text-center").addClass('text-right');
                };
            };
            $(window).resize(function () {
                alterClass();
            });
            alterClass();
        });
    
</script>



<?php require_once('inc/footer.php'); ?>