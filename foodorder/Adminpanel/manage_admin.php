<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage admin</title>



   <link rel="stylesheet" href="style.css">
    
   <meta name="description" content="" />
   <meta name="author" content="" />
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
include 'index.php';
?>


          <div class="w3-container">
            <h1>Manage admin</h1>
            <br>

            <a class="w3-button w3-border w3-blue" href="addadmin.php">
                Add admin

            </a>
             
            <?php
                  if(isset($_SESSION['status']))
                  {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                  }

                ?>
        
<table class="w3-table w3-striped">
    <tr>
        <th>S.NO</th>
        <th>FULL NAME</th>
        <th>USER NAME</th>
        <th>PASSWORD</th>
        <th>ACTION</th>

    </tr>

    
<?php   
$server="localhost";
$username="root";
$password="";
$dbname="food_order";

$c=1;
$conn=mysqli_connect($server,$username,$password,$dbname);
if($conn)
{
  echo "";
}
else{
  echo "";
}

////////////data fetching starts here///////////
$sel="SELECT * FROM addadmin";
$query=$conn->query($sel);
while($row=$query->fetch_assoc())
{
  ?>
  <tr>
       <td><?php echo $c++?></td>
       <td><?php echo $row['full_name'];?></td>
       <td><?php  echo $row['username'];?></td>
       <td><?php  echo $row['password'];?></td>

       <td>
          <div class="w3-button w3-blue w3-tiny">Update</div>
          <div class="w3-button w3-red w3-tiny"> Delete </div>
       </td>

  </tr>

<?php
}
?>


    <!-- $sql="SELECT * FROM tbl_admin";
      //execute the query
      $res=mysqli_query($conn,$sql);
 //check whether the query is executed or not
 if($res==true)
 {
   //count rows to check whether we have data in database or not
   $count=mysqli_num_rows($res);//function to get all rows from database

   //chck the number of rows
   if($count>0)
   {
     //we have data in database
     while($rows=mysqli_fetch_assoc($res))
     {
       //using while loop to  get all data from database
       //and while loop

       $id=$rows['id'];
       $full_name=$rows['full_name'];
       $username=$rows['username'];


       //displat the values in table*/-->
       


</table>

   </div>


</body>
</html>