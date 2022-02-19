<?php ob_start(); ?>
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
    

<?php
session_start();
include 'content.php';
?>



<div class="w3-container">
<h1>Admin</h1>




<!-- contains form-->
<form action="addadmin.php" method="POST">

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
    
   <div class="w3-center"><input type="submit" name="submit" class="w3-button w3-blue w3-round w3-center"></div>
      

     </div>
      
</form>
</div>





<?php

$server="localhost";
$username="root";
$password="";
$dbname="food_order";


$conn=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit']))
{
  if(!empty($_POST['full_name'])&& !empty($_POST['username']) && !empty($_POST['password']) ){
    $name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="insert into addadmin(full_name,username,password) values('$name','$username','$password')";
    $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    if($run)
    {
      $_SESSION['status']="admin added successfully";
      header("Location: manage_admin.php");
     ob_end_flush();
    }
    else{
      echo "not added";
    }


  }
  else{
    echo "all fields are required";
  }
}
/*
//process the value from form and save it in database

//chwcks whether the submit button is clicked or not

   if(isset($_POST['submit']))
   {

    // Button clicked
    //echo "Button clicked";
    //1. Get the Data fron form

     $full_name = $_POST['full_name'];
     $username = $_POST['username'];
     $password = md5($_POST['password']); 


    //2. SQL Query to Save the data into database


    $sql="INSERT INTO tbl_admin SET     
    
    full_name='$full_name'
    username='$username',
    password='$password'
";

// Execute Query and Save Data in Database

$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, "food_order") or die(aysqli_error()); //SElecting Database


  $res = mysqli_query($conn, $sql);

  //check whether the data is inserted or not
if($res==true)
{
  echo "yes";
}
else
{
  echo "no";
}


   }*/
?>
    
</body>
</html>

