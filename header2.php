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
   <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php ob_start();
require('postLogo.php');
?>

<nav class="navbar navbar-inverse">
   <img  class="navbar-brand" src="uploads/<?php echo $lastImage; ?>" title="Logo Image" style="display: block;">   
    </a>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="admin-list.php" title="List">Administration</a></li>
        <li><a href="upload.php" title="List">Logos</a></li>
        <li><a href="index.php" title="List">Public Site</a></li>
        <li><a href="pages.php" title="List">Pages</a></li>
        <li><a href="logout.php" title="List">Log Out</a></li>
    </ul>
</nav>

<main>