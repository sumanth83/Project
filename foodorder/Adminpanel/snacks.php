<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<body>
<?php include 'index.php';?>


<div class="w3-panel w3-center">
   <a href="breakfast.php"> <button class="w3-button">Breakfast</button></a>
   <a href="lunch.php"> <button class="w3-button">Lunch</button></a>
    <a href="snacks.php"><button class="w3-button">Snacks</button></a>

</div>


<div class="w3-container">
            <h1>Snacks</h1>
            <br>

            <a class="w3-button w3-border w3-blue" href=".php">
                Add items
            </a>

            <br><br>

<table class="w3-table w3-striped">
    <tr>
        <td>S.NO</td>
        <td>ITEM</td>
        <td>PRICE</td>
        <td>Action</td>
    </tr>
    <tr>
        <td>1</td>
        <td>samosa</td>
        <td>20</td>
        <td>
        <div class="w3-button w3-blue w3-tiny">Update</div>
        <div class="w3-button w3-red w3-tiny"> Delete </div>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Noodles</td>
        <td>30</td>
        <td>
        <div class="w3-button w3-blue w3-tiny">Update</div>
        <div class="w3-button w3-red w3-tiny"> Delete </div>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Manchuria</td>
        <td>20</td>
        <td>
        <div class="w3-button w3-blue w3-tiny">Update</div>
        <div class="w3-button w3-red w3-tiny"> Delete </div>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Tea</td>
        <td>10</td>
        <td>
        <div class="w3-button w3-blue w3-tiny">Update</div>
        <div class="w3-button w3-red w3-tiny"> Delete </div>
        </td>
    </tr>
</table>

</div>

    
</body>
</html>