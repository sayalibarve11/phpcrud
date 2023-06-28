<?php
function authorize(){
    //authorisation
    if(!isset($_SESSION['username'])){
         header("Location: login_form.php?msg=Unauthorised access");
         exit;
}
}
?>