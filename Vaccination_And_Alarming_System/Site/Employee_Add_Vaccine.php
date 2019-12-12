<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Emplyee"?></title>
        <link rel="stylesheet" href="../Css/Employee_add_Vaccine.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        
    </head>
    <body>
        
        <!--Start Form-->
         <div class="vaccine">
             <form method="post" action="../App/Controllers/Employee_Controller.php" >
            <h1>Add Vaccines</h1>
            <h2>Vaccine Type:</h2>
            <select name="vaccine_type" class="so">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              
            </select>
            <br>
            <h2>Number Of New Vaccines:</h2>
            <input type="number" min="1"  required="required" name="number" value=""  >
            <br>
            
            <br>
            <input type="submit" name="Add" value="Add" class="submit">
        </form>
            </div>
        <!--End Form-->
       
    </body>
</html>
