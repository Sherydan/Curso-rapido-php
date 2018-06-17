<?php
    require_once('config/config.php');
    require_once('config/db.php');

    
    if (filter_has_var(INPUT_POST, 'delete')) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
      

    $query = "DELETE FROM tbl_post WHERE id = {$delete_id}";

        if (mysqli_query($conn, $query)) {
            header("Location: ".ROOT_URL);
            # code...
        } else {
            echo "ERROR ". mysqli_error($conn);
        }
    }

?>