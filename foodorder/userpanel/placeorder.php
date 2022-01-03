<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>placeorder</title>
   
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

    <marquee>Place your order</marquee>


    <form class="">

    <div class="w3-padding-large w3-margin w3-border w3-border-blue w3-round w3-margin-left w3-container w3-panel w3-padding-16">


       <p>Name:
       <input class="w3-input" type="text" placeholder="Enter your name" size="20" required style="width:50%"></p>

        <p>E-mail:
       <input class="w3-input" type="email" placeholder="Enter your mail" required style="width:50%"></p>
       <p>Mobile:
       <input class="w3-input" type="text" placeholder="Enter mobile number"  size="" required style="width:50%"></p>

       <p>Role  :
         <input class="w3-radio" type="radio" id="Student" name="Role" value="Student">
  Student
  <input  class="w3-radio" type="radio" id="Faculity" name="Role" value="Faculity">
  Faculity</p>


<p> Menu:
      <input class="w3-radio" type="radio" id="Breakfast" name="Menu" value="Breakfast">
  Breakfast
  <input class="w3-radio" type="radio" id="Lunch" name="Menu" value="Lunch">
  Lunch
  <input class="w3-radio" type="radio" id="Snacks" name="Menu" value="Snacks">
  Snacks</p>
 


<br>


<input type="Reset" class="w3-button w3-blue w3-round">
<input type="submit" class="w3-button w3-blue w3-round">

</div>

    </form>   

    




  </body>

</html>