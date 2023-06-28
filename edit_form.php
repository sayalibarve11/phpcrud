<?php
  require('dbconn.php');
  require('global_function.php');
  session_start();
  authorize();

  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM diit_users WHERE id=$id";

  error_log("===============SELECT SQL: $sql==================/n/n");

  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $record = $stmt->fetch();
 

?>
<form action="edit_action.php">
    <input value="<?php echo $record['id'];?>" type="text" name="id"/><br/>
    <input value="<?php echo $record['profile_pic'];?>" type="text" name="profile_pic" placeholder="Enter url"/><br/>
    <input value="<?php echo $record['student_name'];?>" type="text" name="student_name" placeholder="Enter Stuednt name"/><br/>
    <input value="<?php echo $record['id_number'];?>" type="text" name="id_number" placeholder="Enter id_number"/><br/> 
    <input value="<?php echo $record['dob'];?>" type="text" name="dob" placeholder="Enter DOB"/><br/>
    <input value="<?php echo $record['address'];?>" type="text" name="address" placeholder="Enter Address"/><br/>
    <input value="<?php echo $record['phone'];?>" type="text" name="phone" placeholder="Enter Phone"/><br/>
    <input value="<?php echo $record['email'];?>" type="text" name="email" placeholder="Enter Email"/><br/>
    <input type="text" name="course" placeholder="Enter Course"/><br/>
    <input type="submit"/>
</form>

