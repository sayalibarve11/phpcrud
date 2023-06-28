<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
</head>
<body>

    <div  style="color: red;">
    <?php
        if(isset($_REQUEST['msg'])){
         echo $_REQUEST['msg'];
        }
    ?>
    </div>
    <form action="login_action.php" method="POST">
    <input type="text" name="username" placeholder="Enter username"/><br>
    <input type="Password" name="Password" placeholder="Enter Password"/><br>
    <input type="Submit"/>

    
</body>
</html>