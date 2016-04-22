<?php ob_start();
// authentication check 
require('auth.php');

// set the title
require('header2.php'); ?>

<h2>Upload A New Logo</h2>

<form method="post" action="save-upload.php" enctype="multipart/form-data">
    <input type="file" name="any_file" />
    <button>Upload</button>
</form>
<br/>
<a href="view-logos.php">View All Logos</a>

</body>
</html>
