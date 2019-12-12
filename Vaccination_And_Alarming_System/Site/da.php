<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php  echo "Nurse"?></title>
        
        <link rel="stylesheet" href="../Css/Check_attendance.css">
          <link rel="stylesheet" href="../Libaries/normalize.css">
        
    </head>
    <body>

           <!--start container-->
        <div class="container">
            
        
 
        
        <!--start cover-->
        <div class="cover">
            <h1>Check Attendance</h1>
            <form class="form">
                    <?php
       $var=1;
       for($var=1;$var<=20;$var++)
       {
           echo "<h2>Child Number $var :</h2>"."<input type=\"checkbox\" value=\"\" class=\"checkbox\">"."<br>";
       }
                      ?>
                <input type="submit" name="" value="Submit" class="button">   
            </form>
        </div>
        <!--end cover-->
        
        
        </div>
        <!--end container-->
       
    </body>
</html>
