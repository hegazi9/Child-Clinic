<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Reserve Appointment";?></title>
        <link rel="stylesheet" href="../Css/Reserve_Appointment.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
               
        <div class="container">
            
        
           
             
            <div class="Register">
                <!--start form-->
                 <h1>Add Child</h1>
                <div class="form">
                    
                    <form action="../App/Controllers/parent_controller.php" method="post">
                    <input required="required" name="p_id" type="hidden" value="<?php echo $_SESSION['id']?>">
                    <h2>Name *</h2>
                    <input type="text" name="name" value="" required="require">
                    <h2>Age *</h2>
                    <input type="number" name="age" value="" required="require">
                     
                    
                     <input type="submit" name="Submit" value="Add" class="button"> 
                 
                </form>
                     </div> 
                <!--end form-->
            </div>
            
           
      
    </body>
</html>
