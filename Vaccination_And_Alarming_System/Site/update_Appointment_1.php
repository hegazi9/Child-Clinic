<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Reschedule Appointment";?></title>
        <link rel="stylesheet" href="../Css/Reserve_Appointment.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        
    </head>
    <body>
               
        <div class="container">
            
        
           
             
            <div class="Register">
                <!--start form-->
                 <h1>Reschedule Appointment</h1>
                <div class="form">
                    
                    <form action="../App/Controllers/parent_controller.php" method="post">
                    <input required="required" name="p_id" type="hidden" value="<?php echo $resu['id']?>">
                    <h2>Choose child *</h2>
                    <select name="child" required="required">
                          <?php
                         
                          echo '<option value="'.$resu['childid'].'">'.$resu['name'].'</option>';

                         ?>
                     </select>
                    
                     <h2>Choose vaccine *</h2>
                     <select name="vaccine" required="required" >
                         
                         <?php
                         
                          echo '<option value="'.$resu['vaccineid'].'">'.$resu['vaccine'].'</option>';

                         ?>
                     </select>
                     
                       <h2>Choose location *</h2>
                     <select name="location" required="required">
                          <?php
                         
                          echo '<option value="'.$resu['branchid'].'">'.$resu['location'].'</option>';

                         ?>                     </select>
                     <h2>date</h2>
                     <input type="date" required="required" name="date" value="<?php echo $resu['date'];?>">
                     
                     
                     
                    
                 <input type="submit" name="Submit" value="C Rescheduling" class="button"> 
                 
                </form>
                    </div> 
                <!--end form-->
            </div>
            
           
      
    </body>
</html>
