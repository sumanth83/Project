<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food status</title>


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
<?php include 'index.php';?>
<marquee>food status</marquee>

<form action="" method="post">

     <div class="w3-padding-large w3-margin w3-border w3-border-blue w3-round w3-margin-left">

     <label>ReferencePin</label>
     <input class="w3-input" type="text" name="full_name" placeholder="Enter your pin" style="width:50%" required>
  
     <br>
    
     <label>Food status:</label>
     <input class="w3-input" type="text" name="username" placeholder="" style="width:50%" disabled>

    <br>
    
    
     <input type="submit" name="submit" class="w3-button w3-blue w3-round">


     </div>
      
</form>



  
</body>
</html>