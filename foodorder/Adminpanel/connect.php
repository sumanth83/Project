<?php
   $item=$_POST['item'];
   $price=$_POST['price'];

   //
   $conn=new mysqli('localhost','root','','breakfast');
   if($conn->connect_error)
   {
       die('connection failed:'.$conn->connect_error);

   }
   else{
       $stmt=$conn->prepare("insert into breakfast(item,price) values(?,?)");
       $stmt->bind_param("si",$item,$price);
       $stmt->execute();
    
       $stmt->close();
       $conn->close();
   }

   /*if($stmt==true)
{
  // echo "data inserted";
  //creating session variable to display the messages

  $_SESSION['add'] = "Admin updated successfully";
  //redirect page to manage admin
  //header("location:".SITEURL.'Admin phase/manage_admin.php');

}
else
{
   //echo "not inserted";
     //creating session variable to display the messages

  $_SESSION['add'] ="Failed to add admin";
  //redirect page to add admin
  header("location:".SITEURL.'Admin phase/addadmin.php');
//header("Location:addadmin.php");
}*/


?>