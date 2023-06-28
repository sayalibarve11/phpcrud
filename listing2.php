<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a style="float:right;" href="logout.php" class="btn btn-info">Logout</a>

<?php
 
 require('global_function.php');
 require('dbconn.php');
  session_start();
  
  authorize();
  echo "<h1>Hello " . $_SESSION['username'] ."</h1>";
 // $_SESSION['username'] = $_REQUEST['uname'];
?>
 <a href="add_form.php" class="btn btn-info">Add New Record</a>

  <?php
  $sql = "SELECT * FROM diit_users";

  error_log("===============SELECT SQL: $sql==================/n/n");

  $stmt = $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $records = $stmt->fetchAll();

?>
<table class="table tablloe-success table-striped align-middle text-center``">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Profile</th>
            <th>Student Name</th>
            <th>Student Id</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>

            

        </tr>


    </thead>
    <tboby>
        <?php foreach($records as $student){  ?>
                <tr>
                <td><?php echo $student['id']; ?></td>
                <td><img src="<?php echo $student['profile_pic']; ?>" alt="profile_pic" width="50px"></td>
                <td><?php echo $student['student_name']; ?></td>
                <td><?php echo $student['id_number']; ?></td> 
                <td><?php echo $student['dob']; ?></td>
                <td><?php echo $student['address']; ?></td>
                <td><?php echo $student['phone']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['course']; ?></td>
                <td>
                    <a href="edit_form.php?id=<?php echo $student['id']; ?>" class="btn btn-info">Edit</a>
                
                    <?php if($_SESSION['username'] == 'superadmin') {?>

                    <a onclick="return confirm('Are you sure want to delete <?php echo $student['student_name']; ?>?');" href="delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger">Delete</a>
                    
                </td>
                
                <?php } ?>
            
                </tr>            
       <?php } ?>
            
    </tbody>
</table>