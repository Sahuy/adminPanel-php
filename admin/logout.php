<?php
include('authentication.php');
if(isset($_POST['logout_btn']))
{
    
    session_destroy(); 
 unset($_SESSION['auth']);
 unset($_SESSION['auth_user']); 

$_SESSION['status'] = "Logged out Successfully";
 header('Location: login.php');
 exit();
}
?>