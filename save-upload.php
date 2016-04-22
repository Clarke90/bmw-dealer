<?php ob_start();
// authentication check 
require('auth.php');

// set the title
require('header2.php'); ?>
<h2>File Saved!</h2>
<?php 

$name = $_FILES['any_file']['name'];
echo "Name: $name<br />";

$size = $_FILES['any_file']['size'];
echo "Size: $size<br />";

$type = $_FILES['any_file']['type'];
echo "Type: $type<br >";

$tmp_name = $_FILES['any_file']['tmp_name'];
echo "Tmp Name: $tmp_name<br />";

// use the session id to create unique name
session_start();
$final_name = session_id() . "-" . $name;

// move from cache to the uploads folder
move_uploaded_file($tmp_name, "uploads/$final_name");

?>

<div class="col-sm-6">
    <div class="row">   
        <?php echo "<img src='uploads/$final_name" . $last_file[0] . "' alt='error'>"; ?>
    </div>
</div>

</body>
</html>
