<?php
$page_title = 'Register';
require_once('header.php'); 
?>

<?php

//check if we have a user ID in the querystring
if (!empty($_GET['user_id'])) {

        //if we do, store that in a  variable
        $user_id = $_GET['user_id'];

        // connect to db 
    require('db.php');
    

    // Check the connection display a message if connected
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

        //select all the data for the selected admin user
        $sql = "SELECT * FROM users WHERE user_id = :user_id";
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $cmd->execute();
        $users = $cmd->fetchAll();

        //disconnect
        $conn = null;

        //store each value from the database into a variable
        foreach ($users as $user) {
            $username = $user['username'];
            $password = $user['password'];
    }
}
?>

        <h1>User Registration</h1>
       
        <form method="post" action="save-registration.php" class="form-horizontal">
            <div class="form-group">
                <label for="username" class="col-sm-2">Username:</label>
                <input name="username" id="name" required placeholder="username" value="<?php echo $username; ?>"/>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2">Password:</label>
                <input type="password" name="password" id="password" required placeholder="password" value="<?php echo $password; ?>" />
            </div>
            <div class="form-group">
                <label for="confirm" class="col-sm-2">Confirm Password:</label>
                <input type="password" name="confirm"/>
            </div>
            <div class="col-sm-offset-2">
              <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
              <button class="btn btn-primary col-sm-offset-2">Save</button>
            </div>
        </form>

<?php require_once('footer.php'); ?>