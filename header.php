<!doctype html>
    <html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--normalize.css cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css">
     <!--style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php ob_start();
require('postLogo.php');
?>

<?php
    // connect
        require('db.php');

// prepare the query
$sql = "SELECT * FROM pages ORDER BY page_id";
$cmd = $conn -> prepare($sql);

// run the query and store the results
$cmd -> execute();
$pages = $cmd -> fetchAll();

// disconnect
$conn = null;
?>
<!--start of nav -->
<style>
   nav a{
        color:#fff;
        font-size:20px;
        margin-top:-10px;
        margin-left:20px;   
    }
 </style>
 
 
<nav class="navbar">
   <img  class="navbar-brand" src="uploads/<?php echo $lastImage; ?>" title="Logo Image" style="display: block;">
  
  <?php   /* loop through the data, displaying each value in a row */
   foreach($pages as $page) {
    echo 
    '<tr><td><a href="#">' . $page['title'] . '</a></td></tr> ';
}
  ?>
  
    <!--<ul class="nav navbar-nav navbar-left">
        <li><a href="#" title="List">Build & Price</a></li>
        <li><a href="#" title="List">Special Offers</a></li>
        <li><a href="#" title="List">Pre-Owned</a></li>
        <li><a href="#" title="List">Find a Retailer</a></li>
        <li><a href="#" title="List">Financial Services</a></li>
    </ul>-->
    
    <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" title="List">Register</a></li>
        <li><a href="login.php" title="List">Login</a></li>
        <img id="logo" src="assets/img/logo.png">
    </ul>
</nav>

<main>