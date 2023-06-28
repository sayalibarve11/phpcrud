<?php

  require('dbconn.php');  // is used to call critical files e.g databases connection
  require('global_function.php');

  session_start();
   
  authorize();
  $id = $_REQUEST['id']; //resiveing id from url
  $sql = "DELETE FROM diit_users WHERE id=$id";
  error_log("===============Delete SQL: $sql==================/n/n");
  $conn->exec($sql);

 header("location:listing2.php");
?>