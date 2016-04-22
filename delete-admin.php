<?php ob_start();
// auth check 
require('auth.php');

try {
    // pick the record the user wants to delete by user_id
    $user_id = null;
    $user_id = $_GET['user_id'];

    if (is_numeric($user_id)) {
        
        // connect
        require('db.php');

        // prepare and execute the DELETE 
        $sql = "DELETE FROM users WHERE user_id = :user_id";

        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $cmd->execute();

        // disconnect
        $conn = null;

        // redirect back to the admin list once executed 
        header('location:admin-list.php');
    }
}
catch (Exception $e) {
    header('location:error.php');
}

ob_flush(); ?>