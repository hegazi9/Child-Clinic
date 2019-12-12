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
                 <h1>Reserve Appointment</h1>
                <div class="form">
                    
                    <form action="../App/Controllers/parent_controller.php" method="post">
                     <input required="required" name="p_id" type="hidden" value="<?php echo $_SESSION['id']?>">
                    <h2>Choose child *</h2>
                    <select name="child" required="required">
                         <option value="0">select child</option>
                         <?php
                         for($i=0;$i<count($row);$i++)
                         { echo '<option value="'.$row[$i]['id'].'">'.$row[$i]['name'].'</option>';}

                         ?>
                     </select>
                    
                     <h2>Choose vaccine *</h2>
                     <select name="vaccine" required="required" >
                         <option value="0">select vaccine</option>
                         <?php
                         for($i=0;$i<count($row2);$i++)
                         { echo '<option value="'.$row2[$i]['id'].'">'.$row2[$i]['name'].'</option>';}

                         ?>
                     </select>
                     
                       <h2>Choose location *</h2>
                     <select name="location" required="required">
                         <option value="0">select location</option>
                         <?php
                         for($i=0;$i<count($row3);$i++)
                         { echo '<option value="'.$row3[$i]['id'].'">'.$row3[$i]['location'].'</option>';}

                         ?>
                     </select>
                     <h2>date</h2>
                     <input type="date" required="required" name="date" value="">
                     
                     
                     
                    
                 <input type="submit" name="Submit" value="Continue" class="button"> 
                 
                </form>
                    </div> 
                <!--end form-->
            </div>
            
           
      
    </body>
</html>
