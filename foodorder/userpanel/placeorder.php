<!DOCTYPE html>
<html lang="en">
  <head>
     <title>placeorder</title>

    
   
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

       <label>Type :<span class="w3-text-red">*</span></label>
         <input class="w3-radio" type="radio" id="Student" name="Role" value="Student">
       Student
         <input  class="w3-radio" type="radio" id="Faculity" name="Role" value="Faculity">
         Faculity
         <input class="w3-radio" type="radio" id="Student" name="Role" value="Student">
         Others


        <br>

       <label> Menu:<span class="w3-text-red">*</span></label>
       <input class="w3-radio" type="radio" id="Breakfast" name="Menu" value="Breakfast">
       Breakfast
       <input class="w3-radio" type="radio" id="Lunch" name="Menu" value="Lunch">
       Lunch
       <input class="w3-radio" type="radio" id="Snacks" name="Menu" value="Snacks">
       Snacks



      <br><br>


<table class="w3-table w3-striped">
    <tr>
         <th>s.no</th>
         <th>Item</th>
         <th>Item price</th>
         <th>Quantity</th>
         <th>Final price</th>
         <th>place order</th>

    </tr>
    <tr>
         <td>1</td>
         <td>Idly</td>
         <td>20</td>
         <td>
           <select name="quantity" id="" class="">

                  <option value="">Choose</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
           </select>
          </td>
         <td></td>
         <td><input type="checkbox" class="w3-check"></td>

    </tr>
    <tr>
         <td>2</td>
         <td>Puri</td>
         <td>30</td>
         <td><select name="quantity" class="">

                  <option value="">Choose</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
           </select></td>
         <td></td>
         <td><input type="checkbox" class="w3-check"></td>


    </tr>
    <tr>
         <td>3</td>
         <td>Dosa</td>
         <td>50</td>
         <td><select name="quantity" id="">

         <option value="">Choose</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
           </select></td>
         <td></td>
         <td><input type="checkbox" class="w3-check"></td>

    </tr>
</table>

<br>


<input type="Reset" class="w3-button w3-blue w3-round">
<input type="submit" class="w3-button w3-blue w3-round">

</div>

    </form>

</div>






  </body>

</html>
