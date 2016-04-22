<?php
$page_title = 'Pages';
require('header2.php');
?>


<a href="page.php" title="Add page">Add a New Page</a>

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

// start the grid with HTML
echo '<table class="table table-striped"><thead><th>Title</th>
<th>Edit</th><th>Delete</th></thead><tbody>';

/* loop through the data, displaying each value in a new column
and each page title in a new row */
foreach($pages as $page) {
    echo '<tr>
        <td>' . $page['title'] . '</td>

    
        <td><a href="page.php?page_id=' . $page['page_id'] . '" title="Edit">Edit</a></td>
        
        <td><a href="delete-page.php?page_id=' . $page['page_id'] . '"
            title="Delete" class="confirmation">Delete</a></td>
        </tr>';
}

// close the HTML grid
echo '</tbody></table>';
require_once('footer.php');
?>

<!-- js section -->

<script src="Scripts/lib/jquery-2.2.0.min.js"></script>
<script src="Scripts/app.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
