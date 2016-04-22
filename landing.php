<?php
$page_title = 'landing page';
require('header2.php');
?>

<div class="jumbotron">
    <h1 class="text-center">Welcome to the Dealer Portal</h1>
</div>
  
<header>
    <div class="row">
            <img class="header_img" src="assets/img/road.jpg" width="100%" height="560px">
    </div>
</header>

<?php
    // connect
        require('db.php');

// prepare the query
$sql = "SELECT * FROM pages";
$cmd = $conn -> prepare($sql);

// run the query and store the results
$cmd -> execute();
$pages = $cmd -> fetchAll();

// disconnect
$conn = null;



?>


<?php require('footer.php'); ?>
