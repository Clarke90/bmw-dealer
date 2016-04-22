<?php ob_start();

// identity the record the user wants to delete
$page_id = null;
$page_id = $_GET['page_id'];

if (is_numeric($page_id)) {

    // connect
        require('db.php');

    // prepare and execute the SQL DELETE command
    $sql = "DELETE FROM pages WHERE page_id = :page_id";

    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':page_id', $page_id, PDO::PARAM_INT);
    $cmd->execute();

    // disconnect
    $conn = null;

    // redirect back to the updated page table.php
    header('location:pages.php');
}

ob_flush(); ?>