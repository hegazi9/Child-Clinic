<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Edit Profile";?></title>
        <link rel="stylesheet" href="../Css/Edit_Profile.css">
           <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
      
      
       
            
        
           
             
            <div class="Register">
                <!--start form-->
                 <h1>Edit Profile</h1>
                <div class="form">
                    
                    <form action="../App/Controllers/parent_controller.php" method="post">
                      <!--<h2>ID *</h2>-->
                        <input required="required" name="id"  type="hidden" value="<?php echo $row[0]?>">     
                          
                       <h2>Name *</h2>
                    <input required="required" name="name" type="text" value="<?php echo $row[1]?>">
                    
                     
                      <!--<h2>User Name *</h2>-->
                     <input required="required" name="username" min="8" max="32" type="hidden" value="<?php echo $row[2]?>">
                     
                      <h2>Password *</h2>
                      <input required="required" name="password" min="8" max="32" type="text" value="<?php echo $row[3]?>">
                     
                     <h2>Email *</h2>
                       <input  required="required"  name="email" type="email" value="<?php echo $row[4]?>">
                 
                      <h2>Age *</h2>
                      <input required="required"  name="age" type="number" max="80" min="20" value="<?php echo $row[5]?>">
                     
                    
                     <input type="submit" name="Submit" value="Update" class="button"> 
                </form>
                    </div> 
                <!--end form-->
            </div>
            
         
       
        <?php
        // put your code here
        ?>
    </body>
</html>
