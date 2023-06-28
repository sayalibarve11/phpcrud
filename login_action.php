<?php
print_r($_REQUEST);

if($_REQUEST['username'] == 'admin' || $_REQUEST['username'] == 'superadmin'){
    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
    header("Location:listing2.php");
}else{
    header("Location: login_form.php?msg=Username or Password is incorrect");
}

?>