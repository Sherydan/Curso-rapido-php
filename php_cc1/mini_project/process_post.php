<?php
    $file = 'post.txt';

   if (filter_has_var(INPUT_POST, 'submit')) {
        $title = htmlentities($_POST['title']);
        $body = htmlentities($_POST['topic-body']);
       
       if (file_exists('post.txt')) {
           file_put_contents($file, "");
           $handle = fopen($file, 'w') or die('No se puede abrir el archivo: '. $file);
           fwrite($handle, $title);
           fwrite($handle, "\n". $body);
           fclose($handle);

           header("Location: show_post.php");
       }else {
           $handle = fopen($file, 'w') or die('No se puede abrir el archivo: '. $file);
           fwrite($handle, $title);
           fwrite($handle, "\n". $body);
           fclose($handle);

           header("Location: show_post.php");
       }
   }
?>


