<?php ob_start();
// authentication check 
// require('auth.php');

// set the title
$page_title = 'Admin Listings';
require('header2.php'); ?>

<?php
// initialize an empty id variable
$page_id = null;
$title = null;
$_content = null;


//check if we have an ID in the querystring
if (is_numeric($_GET['page_id'])) {

    //if we do, store in a variable
    $page_id = $_GET['page_id'];

    // connect
        require('db.php');

    //select all the data
    $sql = "SELECT * FROM pages WHERE page_id = :page_id";
    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':page_id', $page_id, PDO::PARAM_INT);
    $cmd->execute();
    $pages = $cmd->fetchAll();

    //disconnect
    $conn = null;

    //store each value from the database into a variable
    foreach ($pages as $page) {
    $title = $page['title'];
    $content = $page['content'];

    }
}
?>

<h1>Page Information</h1>

<a href="pages.php" title="View Pages">View Page Listings</a>

<p>* indicates Required Fields</p>
<form method="post" action="save-page.php">
    <fieldset>
        <label for="title" class="col-sm-2">Title: </label>
        <input name="title" id="title" required placeholder="Title Name" value="<?php echo $title; ?>" />
    </fieldset>
    
    <fieldset>
        <label for="content" class="col-sm-2">Content: </label>
        <input type="text" name="content" id="content" required placeholder="Content" value="<?php echo $content; ?>" />
    </fieldset>

    <input type="hidden" name="page_id" id="page_id" value="<?php echo $page_id; ?>" />
    <button class="btn btn-primary col-sm-offset-2">Save</button>
</form>

</body>

</html>