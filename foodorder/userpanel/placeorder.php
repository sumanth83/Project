<!DOCTYPE html>
<html lang="en">
  <head>
     <title>placeorder</title>
<style>
    input{
        cursor:pointer;
    }
</style>
    
   
  </head>

  <body>
  <?php include 'index.php';?>

    <marquee>Place your order</marquee>


    <div class="w3-container w3-panel">
           <h1>Place order</h1>

           <form class="">

           <div class=" w3-border w3-border-blue w3-round w3-container w3-panel w3-padding-16">

              <p class="w3-text-red"><span>  * required field</span></p>

          <label>Name: <span class="w3-text-red">*</span></label>
          <input class="w3-input" type="text" placeholder="Enter your name" size="20" required style="width:50%"><br>

           <label>E-mail:<span class="w3-text-red">*</span></label>
          <input class="w3-input" type="email" placeholder="Enter your mail" required style="width:50%"></p><br>

          <label>Mobile:<span class="w3-text-red">*</span></label>
          <input class="w3-input" type="text" placeholder="Enter mobile number"  size="" required style="width:50%"></p>
          

          <label>Reference Pin</label>
          <input class="w3-input" type="text" placeholder="Create a four digit pin" required style="width:50%"></p>
          <label>Type :<span class="w3-text-red">*</span></label>
          <input class="w3-radio" type="radio" id="Student" name="Role" value="Student">
              Student
          <input  class="w3-radio" type="radio" id="Faculity" name="Role" value="Faculity">
              Faculity
          <input class="w3-radio" type="radio" id="Student" name="Role" value="Student">
               Others


                   <br>

           <label> Menu:<span class="w3-text-red">*</span></label>
           <input class="w3-radio" type="radio" id="Breakfast" name="Menu" value="Breakfast" onclick="menu(0)">
             Breakfast
           <input class="w3-radio" type="radio" id="Lunch" name="Menu" value="Lunch" onclick="menu(1)">
              Lunch
           <input class="w3-radio" type="radio" id="Snacks" name="Menu" value="Snacks" onclick="menu(2)">
                Snacks



                 <br><br>

            <!------------------------------------------------Menu of breakfast------------------------------------------>
           <table class="w3-table w3-striped" id="breakfast" hidden>
             <tr>
                    <th>s.no</th>
                    <th>Item</th>
                    <th>Item price</th>
                    <th>Quantity</th>
                    <th>Final price</th>
                    

            </tr>
            <tr>
                    <td>1</td>
                    <td>Idly</td>
                    <td>20</td>
                    <td><select name="quantity" id="idly" class="w3-border" style="height:25px" onchange="brc()">

                           <option value="">Choose</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                        </select>
                    </td>
                    <td><span id="idly1"></span></td>
                    

            </tr>
           <tr>
                    <td>2</td>
                    <td>Puri</td>
                    <td>30</td>
                    <td><select name="quantity" id="puri" class="w3-border" style="height:25px" onchange="brc()">

                            <option value="">Choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                   <td><span id="puri1"></span></td>
                   


             </tr>
             <tr>
                   <td>3</td>
                  <td>Dosa</td>
                  <td>50</td>
                  <td><select name="quantity" id="dosa" class="w3-border" style="height:25px" onchange="brc()">

                          <option value="">Choose</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                       </select></td>
                   <td><span id="dosa1"></span></td>
                  
              </tr>
         </table>

<!---------------------------------------------------------end of breakfast----------------------------------------------->




          <!--------------------------------------------------------------Menu of Lunch----------------------------------->
          <table class="w3-table w3-striped" id="lunch" hidden>
             <tr>
                    <th>s.no</th>
                    <th>Item</th>
                    <th>Item price</th>
                    <th>Quantity</th>
                    <th>Final price</th>
                    

            </tr>
            <tr>
                    <td>1</td>
                    <td>Biriyani</td>
                    <td>20</td>
                    <td><select name="quantity" id="" class="w3-border" style="height:25px">

                           <option value="">Choose</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                        </select>
                    </td>
                    <td></td>
                    

            </tr>
           <tr>
                    <td>2</td>
                    <td>Fried rice</td>
                    <td>30</td>
                    <td><select name="quantity" class="w3-border" style="height:25px">

                            <option value="">Choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                   <td></td>
                   


             </tr>
             <tr>
                   <td>3</td>
                  <td>Meals</td>
                  <td>50</td>
                  <td><select name="quantity" class="w3-border" style="height:25px">

                          <option value="">Choose</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                       </select></td>
                   <td></td>
                  

              </tr>
         </table>

<!-------------------------------end of lunch----------------------------------------------------------------------->

           <!------------------------------------------------------------Menu of snacks----------------------->
           <table class="w3-table w3-striped" id="snacks" hidden>
             <tr>
                    <th>s.no</th>
                    <th>Item</th>
                    <th>Item price</th>
                    <th>Quantity</th>
                    <th>Final price</th>
                    

            </tr>
            <tr>
                    <td>1</td>
                    <td>Samosa</td>
                    <td>20</td>
                    <td><select name="quantity" id="" class="w3-border" style="height:25px">

                           <option value="">Choose</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                        </select>
                    </td>
                    <td></td>
                    

            </tr>
           <tr>
                    <td>2</td>
                    <td>Noodles</td>
                    <td>30</td>
                    <td><select name="quantity" class="w3-border" style="height:25px">

                            <option value="">Choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                   <td></td>
                   


             </tr>
             <tr>
                   <td>3</td>
                  <td>Tea</td>
                  <td>50</td>
                  <td><select name="quantity" class="w3-border" style="height:25px">

                          <option value="">Choose</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                       </select></td>
                   <td></td>
                  

              </tr>
         </table>

<!--------------------------------------------end of snacks------------------------------------------------------------>

<br>
<h4 align="center" >Total Cost : <span id="TC"></span></h4>
<div class="w3-center">
<button type="Reset" class="w3-button w3-blue w3-round">Reset</button>
<button type="submit" class="w3-button w3-blue w3-round" onclick="cp()">Submit</button></div>

</div>

    </form>

</div>




<!-----------------------------------------------scriopt------------------------------------------------------------->
<script>
 function menu(x)
 {
     if(x==0){
     document.getElementById('breakfast').style.display='table';
     document.getElementById('lunch').style.display='none';
     document.getElementById('snacks').style.display='none';
     }

     if (x==1) {
        document.getElementById('breakfast').style.display='none';
     document.getElementById('lunch').style.display='table';
     document.getElementById('snacks').style.display='none';
     }
      if (x==2) {
        document.getElementById('breakfast').style.display='none';
     document.getElementById('lunch').style.display='none';
     document.getElementById('snacks').style.display='table';

     }
     return;
 }
 function brc(){
     var x = document.getElementById('idly').value;
     document.getElementById('idly1').innerHTML = 20*x;
     var y = document.getElementById('puri').value;
     document.getElementById('puri1').innerHTML = 30*y;
     var z = document.getElementById('dosa').value;
     document.getElementById('dosa1').innerHTML = 50*z;
     document.getElementById('TC').innerHTML = (20*x)+(30*y)+(50*z);
     
 }
 function cp(){
     window.confirm("proceed to pay the payment of "+a);
 }

    </script>

  </body>

</html>
