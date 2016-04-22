<?php ob_start();
// authentication check 
require('auth.php');

// set the title
$page_title = 'Admin Listings';
require('header2.php'); ?>

<h1>Admin Only</h1>

<?php

try {
    
    // connect
    require('db.php');
    
    // Check the connection & display a message if connected
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";


    // prepare the query
    $sql = "SELECT * FROM users";
    $cmd = $conn->prepare($sql);

    // run query and store the results
    $cmd->execute();
    $users = $cmd->fetchAll();

    // disconnect
    $conn = null;

    // html table grid 
    echo '<table class="table table-striped"><thead><th>User Id</th><th>Email</th>
          <th>Edit</th><th>Delete</th></thead><tbody>';

    /* loop through the database, displaying each value in a new column
    and each user in a new row */
    foreach ($users as $user) {
        echo '<tr>
              <td>' . $user['user_id'] . '</td>
              <td>' . $user['username'] . '</td>
            
            <td><a href="register.php?user_id=' . $user['user_id'] . '" title="Edit">Edit</a></td>
            
            <td><a href="delete-admin.php?user_id=' . $user['user_id'] . '"
                title="Delete" class="confirmation">Delete</a></td>
            </tr>';
    }

    // close the HTML table
    echo '</tbody></table>';
}//try

catch (Exception $e) {
   
    // send myself the error
    mail('chadclarke@bell.net', ' Admin Error', $e);

    // // redirect to the error page
    // header('location:error.php');
}
require_once('footer.php');
ob_flush(); ?>
