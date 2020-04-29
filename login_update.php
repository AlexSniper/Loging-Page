<?php include "db.php";?>
<?php include "functions.php";?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
 $password = $_POST['password'];
     $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= " username = '$username', ";
    $query .= " password ='$password' ";
       $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
        if(!$result){
die(' Query failed '.mysqli_error($connection));//All commands will stop
    }else{
        echo" Query created";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

   <div class="container">


       <div class="col-md-6">

           <form action="login_create.php" method="post">
               <div class="form-group">
                  <label for="username">UserName</label>
                   <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                      <label for="password">Password</label>
                   <input type= "password" name="password" class ="form-control">
               <select name="id" id="">
               <?php

               showAllData();
echo" Test for git here";
                   ?>

               </select>
               </div>
               <input class="btn btn-primary" type="submit" value="UPDATE" name="submit">
           </form>


       </div>
   </div>


</body>
</html>
