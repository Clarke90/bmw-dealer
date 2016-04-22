<?php 

$page_title = 'Saving your registration...';

require_once('header.php');

// store the form inputs in variables
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$user_id = $_POST['user_id'];
 
 $ok = true; 

// now validate inputs if good connect to database 

if (empty($username)){
    echo 'Username is required<br />';
    $ok = false;
}

if (empty($password)){
    echo 'Password is required<br />';
    $ok = false; 
   
}
if ($password != $confirm){
    echo 'Password must match<br />';
    $ok = false; 
}
// save if the form is ok 
if ($ok == true){
   
require_once('db.php');
    
    
 // save the data to database using sql 
    if (empty($user_id)) {
        $sql = "INSERT INTO users (username, password)
      VALUES (:username, :password)";
    }
    else {
        $sql = "UPDATE users SET username = :username, password = :password";
    }
      
      // create a command object
    $cmd = $conn->prepare($sql);
    
    // hash the password 
    $hashed_password = hash('sha512', $password);
    
    $cmd = $conn->prepare($sql);
    $cmd->bindParam (':username', $username, PDO::PARAM_STR, 50);
    $cmd->bindParam (':password', $hashed_password, PDO::PARAM_STR, 128);
    $cmd->execute();  

      // add the user id if we have one for an update
    if (!empty($user_id)) {
        $cmd -> bindParam(':user_id', $user_id, PDO::PARAM_INT);
    }

     // execute the save
    $cmd -> execute();
    
    $conn = null; //disconect 
    
    echo 'Your registration has been saved. Click to <a href="login.php" title="Login">Login</a>';
    
}
?>

 <?php require('footer.php'); ?>