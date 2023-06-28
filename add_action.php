<?php

  require('dbconn.php');  // is used to call critical files e.g databases connection
  require('global_function.php');

  session_start();
   
  authorize();
  $profile_pic=$_REQUEST['profile_pic'];
  $student_name =$_REQUEST['student_name'];
  $student_id =$_REQUEST['id_number']; 
  $dob =$_REQUEST['dob'];
  $address =$_REQUEST['address'];
  $phone =$_REQUEST['phone'];
  $email =$_REQUEST['email'];
  $course =$_REQUEST['course'];

  $sql = "INSERT INTO diit_users VALUES(NULL,'$student_name','$student_id','$dob','$address','$phone','$email','$course','$profile_pic')";
  error_log("==============INSERT SQL: $sql==================/n/n");
  $conn->exec($sql);
  header("location:listing2.php");
?>