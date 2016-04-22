<?php ob_start(); ?>

<!DOCTYPE html>
    <html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <title>Page Saved</title>
    </head>
<body>
<?php
// initialize variables
$page_id = null;
$content =null;
$title = null;


// store the form inputs in variables
$page_id = $_POST['page_id'];
$content = $_POST['content'];
$title = $_POST['title'];

// validate our inputs individually
$ok = true;

if (empty($title)) {
    echo 'title is required<br />';
    $ok = false;
}

// check if the form is ok to save or not
if ($ok == true) {

    // connect
        require('db.php');

    // set up the SQL command to save the data
    if (empty($page_id)) {
        $sql = "INSERT INTO pages (title, content)
      VALUES (:title, :content)";
    }
    else {
        $sql = "UPDATE pages SET title = :title,content = :content WHERE page_id = :page_id";
    }

    // create a command object
    $cmd = $conn->prepare($sql);

    // put each input value into the proper field
    $cmd -> bindParam(':title', $title, PDO::PARAM_STR);
    $cmd -> bindParam(':content', $content, PDO::PARAM_INT);
    
    // add the id if we have one for an update
    if (!empty($page_id)) {
        $cmd -> bindParam(':page_id', $page_id, PDO::PARAM_INT);
    }

    // on save add a new file for the new page being created  *****
    $myfile = fopen("newpage.php", "w");
    
    // add the imput text to that newely made file *****
     $txt = "<?php echo $title; ?>\n";
     fwrite($myfile, $txt);
    
     $txt = "<?php echo $content; ?>\n";
     fwrite($myfile, $txt);
    // 
    fclose($myfile);

   
    
    // execute the save
    $cmd -> execute();

    // disconnect
    $conn = null;

    // redirect
    header('location:pages.php');
}
?>


</body>
</html>

<?php ob_flush(); ?>