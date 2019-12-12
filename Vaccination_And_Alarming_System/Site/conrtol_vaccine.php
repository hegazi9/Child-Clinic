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
        <link rel="stylesheet" href="../../Css/Nurse_Add_Vaccine.css">
        <link rel="stylesheet" href="../../Libaries/normalize.css">
        
    </head>
    <body>
        
        
        <!--Start Form-->
         <div class="vaccine">
             <form method="post" action="../App/Controllers/Nurse_Controller.php">
            <h1>Vaccines</h1>
            <h2>Vaccine Type:</h2>
            <select name="vaccine_type" required="required">
                <option value="">Select Vaccine</option>
                <?php
                         for($i=0;$i<count($row);$i++)
                         { echo '<option value="'.$row[$i]['id'].'">'.$row[$i]['name'].'</option>';}

                         ?>
              
            </select>
            <br>
            <h2>New Quantity:</h2>
            <input type="number" min="1" max="500" required="required" name="number" value="">
            <br>
            
            <br>
            <input type="submit" name="Submit" value="Submit" class="submit">
        </form>
            </div>
        <!--End Form-->
      
    </body>
</html>
