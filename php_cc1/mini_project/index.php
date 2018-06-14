<?php require_once('inc/head.php') ?>

<div class="container">
    <h3>Postear un nuevo tema en: </h3>

    <form action="process_post.php" method="post">
        <div class="form-group">
            <label for="">Titulo del Tema</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <textarea name="topic-body" id="topic-body" class="form-control">

            </textarea>
        </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-new-post" name="submit">Postear</button>
        <button class="btn btn-secondary btn-new-post">Previsualizar</button>
        <button class="btn btn-danger btn-new-post">Cancelar</button>
    </div>
    </form>
</div>

<?php require_once('inc/footer.php'); ?>