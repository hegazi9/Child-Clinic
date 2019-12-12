<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Invoices";?></title>
        <link rel="stylesheet" href="../Css/Invoices.css">
          <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
         <!--Start Form-->
         <div class="costs">   <form action="../App/Controllers/Employee_Controller.php" method="post">
            <h1>Invoices</h1>
            <h2 class="soo">Costs of Vaccines:</h2>
            <input type="text" name='costs' value="">
            <br>
            <h2>New Equipment costs:</h2>
            <input type="text" name='equipementcosts' value="">
            <br>
            <h2>Other Expenses costs:</h2>
            <input type="text" name='expenses' value="" >
            <br>
             
             <input  name='employeeid' type='hidden' value="<?php echo $_SESSION['id']?>">
            <br>
            <input type="submit" name='submit' value="submit" class="submit">
        </form>
            </div>
        <!--End Form-->
        
    </body>
</html>
