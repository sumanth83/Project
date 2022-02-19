<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminstration</title>
</head>
<body>
<?php include 'index.php';?>


<div>
    <h1>Breakfast</h1>


    <?php
 if(isset($_SESSION['add']))//checking whether the session is set or not
  {
    echo $_SESSION['add']; 
    unset($_SESSION['add']);
  }
?>
    <!--contains form-->
<form action="connect.php" method="post">

<div class="w3-padding-large w3-margin w3-border w3-border-blue w3-round w3-margin-left">

<label>Item:</label>
<input class="w3-input" type="text" name="item" placeholder="Add breakfast type" style="width:50%" required>

<br>

<label>Price:</label>
<input class="w3-input" type="text" name="price" placeholder="Enter price for the item" style="width:50%" required>

<br>
<!--
<label for="">Password:</label>
<input class="w3-input" type="password" name="password" placeholder="Enter your password" style="width:50%" required>

<br>-->

<!--<input type="submit" name="submit" class="w3-button w3-blue w3-round w3-center">-->
<div class="w3-center"><button type="submit" class="w3-button w3-blue w3-round">Submit</button></div>


</div>
 
</form>


</div>
    
</body>
</html>