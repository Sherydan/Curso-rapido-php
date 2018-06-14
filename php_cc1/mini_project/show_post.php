<?php require_once('inc/head.php'); ?>

<?php
   $file = 'post.txt';
   $lines = file($file);
   $size = count($lines);
?>

<div class="container">
    <form action="">
    <h2><?php echo $lines[0]; ?></h2>
    <textarea name="topic" id="topic-body" class="form-control" >
        <?php for($i =1; $i < $size; $i++): ?>
            <?php echo $lines[$i]; ?>
        <?php endfor ?>
        
    </textarea>
    <br>

    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Volver al inicio</a>
    </div>
    </form>

    
    
</div>

<?php require_once('inc/footer.php'); ?>

