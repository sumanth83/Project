<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paymentstatus</title>

</head>

<body>
    
<?php include 'index.php';?>

<marquee>payment status</marquee>

<div class="w3-container w3-panel">
<h1>Payment status</h1>

<form action="" method="post">



<!--<div class="w3-padding-large w3-margin w3-border w3-border-blue w3-round w3-margin-left">-->
     <div class=" w3-border w3-border-blue w3-round w3-container w3-panel w3-padding-16">


     <p class="w3-text-red"><span>  * required field</span></p>


     <label>ReferencePin <span class="w3-text-red">*</span></label>
     <input class="w3-input" type="text" name="full_name" placeholder="Enter your four digit pin" style="width:50%" required>
  
     <br>
    
     <label>Payment status:</label>
     <input class="w3-input" type="text" name="username" placeholder="" style="width:50%" disabled>

    <br>
    
    
    <div class="w3-center"><button type="submit" class="w3-button w3-blue w3-round">Submit</button></div>


     </div>
     </form>

</div>









      

</body>
</html>