<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Reschedule Appointment";?></title>
        <link rel="stylesheet" href="../Css/Reserve_Appointment.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        <link rel="stylesheet" href="../../Css/Reserve_Appointment.css">
        <link rel="stylesheet" href="../../Libaries/normalize.css">
        
    </head>
    <body>
               
       <!--start navbar-->
        <div class="navbar">
            
          
              <h1>V<span>SAS</span></h1>
                <ul>
                  
                    <li class="part"><a href='../../App/Controllers/Logout.php' >Log out</a> </li>
                
                    
                   
                  
                      
                  
                  <li><a href="../../App/Controllers/User_Page_Contrroler.php?user=Parent">Home</a></li>
                  

        
        </ul>    
           
   
        </div>
            
        
           
             
            <div class="Register">
                <!--start form-->
                 <h1>Reschedule Appointment</h1>
                <div class="form">
                    
                   <form action="parent_controller.php" method="post">
                   <input required="required" name="p_id" type="hidden" value="<?php echo $data[0]?>"> 
                  <input required="required"  name="date" type="hidden" value="<?php echo $data[4]?>">
                   
                   <h2>time</h2>
                   <select name="time">
                   <option value="0">select time</option>
                   <?php 
                   $date = date_create(date("Y/m/d"));
                   date_time_set($date, 8, 00, 00);
                    for ($i = 1; $i <= 13; $i++) {
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
                     
                     
                    
                 <input type="submit" name="Submit" value="Reschedule" class="button"> 
                 
                </form>
                    </div> 
              
            </div>
            
            <!--start footer-->
        <div class="footer"><h5>All rights reserved&COPY;Team</h5></div>
         <!--start footer-->
      
    </body>
</html>
