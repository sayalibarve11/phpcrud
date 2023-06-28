<?php
  require('global_function.php');
  session_start();
  authorize();
?>
<form action="add_action.php">
    <input type="text" autofocus name="profile_pic" placeholder="Enter url"/><br/>
    <input type="text" name="student_name" placeholder="Enter Stuednt name"/><br/>
    <input type="text" name="id_number" placeholder="Enter id number"/><br/>
    <input type="text" name="dob" placeholder="Enter DOB"/><br/>
    <input type="text" name="address" placeholder="Enter Address"/><br/>
    <input type="text" name="phone" placeholder="Enter Phone"/><br/>
    <input type="text" name="email" placeholder="Enter Email"/><br/>
    <input type="text" name="course" placeholder="Enter Course"/><br/>
    <input type="submit"/>
</form>

