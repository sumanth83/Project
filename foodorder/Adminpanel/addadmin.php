
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin settings</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

        <!-- Latest compiled and minified CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!--jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--Latest compiled JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    

<?php include 'content.php';?>


<div class="w3-container">
<h1>Admin</h1>

<?php
 if(isset($_SESSION['add']))//checking whether the session is set or not
  {
    echo $_SESSION['add']; 
    unset($_SESSION['add']);
  }

?>


<!-- contains form-->
<form action="" method="post">

     <div class="w3-padding-large w3-margin w3-border w3-border-blue w3-round w3-margin-left">

     <label>Fullname:</label>
     <input class="w3-input" type="text" name="full_name" placeholder="Enter your name" style="width:50%" required>
  
     <br>
    
     <label>Username:</label>
     <input class="w3-input" type="text" name="username" placeholder="Enter your username" style="width:50%" required>

    <br>
    
     <label for="">Password:</label>
     <input class="w3-input" type="password" name="password" placeholder="Enter your password" style="width:50%" required>
    
     <br>
    
     <input type="submit" name="submit" class="w3-button w3-blue w3-round">


     </div>
      
</form>
</div>

<?php

//checks whether the submit button is clicked or not
if(isset($_POST['submit']))
{

    //1.Get the data from form
  $full_name=$_POST['full_name'];
  $username=$_POST['username'];
  $password=md5($_POST['password']);


//sql query to save the data into database
$sql="INSERT INTO tbl_admin SET

full_name='$full_name',
username='$username',
password='$password'

";

//echo $sql;


//executing query and save data into database
$res=mysqli_query($conn, $sql);// or die(mysqli_error());

//check whether the data is inserted or not and display msg


if($res==true)
{
  // echo "data inserted";
  //creating session variable to display the messages

  $_SESSION['add'] = "Admin updated successfully";
  //redirect page to manage admin
  header("location:".SITEURL.'Admin phase/manage_admin.php');

}
else
{
   //echo "not inserted";
     //creating session variable to display the messages

  $_SESSION['add'] ="Failed to add admin";
  //redirect page to add admin
  header("location:".SITEURL.'Admin phase/admin.php');
//header("Location:addadmin.php");



}

}
?>
    
</body>
</html>