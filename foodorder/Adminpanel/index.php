<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <link rel="stylesheet" href="style.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <title>E-canteen-Adminstration</title>
      
    </head>

    <body>
        <div class="w3-center">
          <img class="w3-left" src="assets/diet icon.jpg" alt="canteen" title="E-canteen" width="12%">
            <img src="assets/ecanteen.png" alt="canteen" title="E-canteen" width="50%">

        </div>

      
        <div class="w3-bar w3-blue">
            <a href="home.php" class="w3-bar-item w3-button">Home</a>
           <a href="about.html" class="w3-bar-item w3-button w3-hide-small w3-right">Logout</a>
           <a href="manage_admin.php" class="w3-bar-item w3-button w3-hide-small w3-right">Manage admin</a>
           <a href="orders.php" class="w3-bar-item w3-button w3-hide-small w3-right">Orders</a>
           <a href="menu.php" class="w3-bar-item w3-button w3-hide-small w3-right">Menu</a>


            <!--<a href="paymentstatus.html" class="w3-bar-item w3-button w3-hide-small w3-right">Payment status</a>
            <a href="placeorder.html" class="w3-bar-item w3-button w3-hide-small w3-right">Place order</a>-->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
          </div>
          
          <div id="demo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium">
      
           <!--<a href="placeorder.html" class="w3-bar-item w3-button">Place order</a>
            <a href="paymentstatus.html" class="w3-bar-item w3-button">Payment status</a>-->
            <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
            <a href="orsers.php" class="w3-bar-item w3-button">Orders</a>
            <a href="manage_admin.php" class="w3-bar-item w3-button">Manage Admin</a>
            <a href="about.html" class="w3-bar-item w3-button w3-hide-small w3-right">Logout</a>




            </div>
    




       <!--
        <div class="w3-display-bottommiddle">
        <a href='https://dissertation-writingservice.com/'>dissertation-writingservice.com</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=5b0c0557c32effe761b10cbad585d464fbe52fd2'></script>
        <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/890941/t/2"></script>


        </div>

           <div class="w3-center w3-panel w3-card-4">
         <form action="" method="post" name="myform">

            <p>Username:
            <input type="text"  name="uname" placeholder="Enter user name" required></p>
            <p>Password:
            <input type="password" name="pwd" placeholder="Enter password" required></p>
            
            <br><br>
            <button type="submit" onclick="nextPage()">Submit</button>
         </form>

         </div>-->






              <script>
                function myFunction() {
                  var x = document.getElementById("demo");
                  if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                  } else { 
                    x.className = x.className.replace(" w3-show", "");
                  }
                }


                function nextPage(){
                    var username=document.forms["myform"]["uname"].value;
                    var password=document.forms["myform"]["pwd"].value;
                     if(username=="admin1" && password=="1234")
                     {
                         window.location.href="file.html";
                     }
                     else
                     {
                         alert("invalid username or  password");
                     }
                }

              /*  //edit this message to say what you want
    var message = "Sorry: Right click was disabled by developer.";

function clickIE() {
    if (document.all) {
        alert(message);
        return false;
    }
}
function clickNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            alert(message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
}
else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false")*/

                </script>

        
    </body>
</html>