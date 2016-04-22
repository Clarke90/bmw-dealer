<?PHP

// if logout button pressed destroy page then redirect 
session_start();
session_destroy();

   // redirect back to the login page
header('location:login.php');

?>