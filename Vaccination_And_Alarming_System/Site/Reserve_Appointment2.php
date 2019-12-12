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
        <link rel="stylesheet" href="../../Css/Reserve_Appointment.css">
        <link rel="stylesheet" href="../../Libaries/normalize.css">
        
    </head>
    <body>
               
        <div class="container">
            
        
           
             
            <div class="Register">
                <!--start form-->
                 <h1>reserve Appointment</h1>
                <div class="form">
                    
                   <form action="parent_controller.php" method="post">
                   <input required="required" name="p_id" type="hidden" value="<?php echo $data[0]?>">
                   <input required="required" name="child_id" type="hidden" value="<?php echo $data[1]?>">
                   <input required="required" name="branchid" type="hidden" value="<?php echo $data[3]?>">
                   <input required="required"  name="date" type="hidden" value="<?php echo $data[4]?>">
                   <input required="required" name="vaccineid" type="hidden" value="<?php echo $data[2]?>">
                   <h2>time</h2>
                   <select name="time">
                   <option value="0">select time</option>
                   <?php 
                   $date = date_create(date("Y/m/d"));
                   date_time_set($date, 8, 00, 00);
                    for ($i = 1; $i <= 12; $i++) {
                        if (in_array(date_format($date, 'H:i:s'), $value)) 
                        {
                            date_add($date, date_interval_create_from_date_string('30 minute'));
                        }
                 else {
                            $time = date_format($date, "H:i:s");
                            echo '<option value="'.$time.'">'.$time.'</option>';
                            //$option = '<option value="$time">' . $time . '</option>';
                            date_add($date, date_interval_create_from_date_string('30 minute'));
                            //echo $option;
                        }
                    }?>
                           
                   </select>
                     
                     
                    
                 <input type="submit" name="Submit" value="Reserve" class="button"> 
                 
                </form>
                    </div> 
              
            </div>
            
           
      
    </body>
</html>
