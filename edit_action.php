<?php

  require('dbconn.php');
  require('global_function.php');

  session_start();
   
  authorize();
  $id=$_REQUEST['id'];
  $student_name =$_REQUEST['student_name'];
  $id_number =$_REQUEST['id_number']; 
  $dob =$_REQUEST['dob'];
  $address =$_REQUEST['address'];
  $phone =$_REQUEST['phone'];
  $email =$_REQUEST['email'];
  $course =$_REQUEST['course'];
  $profile_pic=$_REQUEST['profile_pic'];

  $sql = "UPDATE diit_users SET student_name ='$student_name',id_number ='$id_number',dob ='$dob',address ='$address',phone =$phone,email ='$email',course ='$course',profile_pic='$profile_pic' WHERE id =$id";

  error_log("==============UPDATE SQL: $sql==================/n/n");
  $conn->exec($sql);

header("location:listing2.php");
?>