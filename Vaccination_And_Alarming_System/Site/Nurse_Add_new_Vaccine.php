<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Add Vaccine"?></title>
        <link rel="stylesheet" href="../Css/Nurse_Add_Vaccine.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        
    </head>
    <body>
        
        
        <!--Start Form-->
         <div class="vaccine">
             <form method="post" action="../App/Controllers/Nurse_Controller.php">
            <h1>Vaccines</h1>
            <br>
            <h2>Please Enter Vaccine Name:</h2>
            <input type="text"  required="required" name="name" value="">
            <br>
            <h2>Please Enter Vaccine Quantity:</h2>
            <input type="number"  required="required" name="quantity" value="">
            <br>
            <h2>Please Enter Vaccine Dose:</h2>
            <input type="number"  required="required" name="dose" value="">
            <br>
            
            <br>
            <input type="submit" name="Submit" value="ADD" class="submit">
        </form>
            </div>
        <!--End Form-->
      
    </body>
</html>
