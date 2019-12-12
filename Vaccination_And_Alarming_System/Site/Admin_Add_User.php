
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Admin" ;?></title>
        <link rel="stylesheet" href="../Css/Admin_Add_User.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        <link rel="stylesheet" href="../../Css/Admin_Add_User.css">
        <link rel="stylesheet" href="../../Libaries/normalize.css">
    </head>
    <body>
        
      
        
                <!--start form-->
                <div class="cover">
                <div class="form">
                      <h1>Add User</h1>
                      <form action="../App/Controllers/admin_controller.php" method="post">
                          
                       <h2>Name *</h2>
                       <input required="required" name="name" type="text" value=""  class="input">
                    
                     
                     <h2>User Name *</h2>
                     <input required="required" name="username" type="text" value="" min="8" max="32" class="input">
                     
                      <h2>Password *</h2>
                      <input required="required" name="password" type="text" value="" min="8" max="32" class="input">
                     
                     <h2>Email *</h2>
                       <input  required="required"  name="email" type="email" value=""  class="input">
                 
                      <h2>Age *</h2>
                      <input required="required"  name="age" type="number" max="50" min="20" value="" class="input">
                         <h2>Branch *</h2>
                     <select name="branch" class="input">
                         <option value="1">abbasia</option>
                         <option value="2">helwan</option>
                         <option value="3">nasr city</option>
                         <option value="4">el marg</option>
                     </select>  
                     <h2>User Type*</h2>
                     <input type="number" max="4" min="1" name="usertype" value="" class="input">
                    
                     
                     <input type="submit" name="Submit" value="Submit" class="button"> 
                </form>
                    </div> 
                    </div>
                <!--end form-->
                
               
      
          
        <?php
        // put your code here
        ?>
    </body>
</html>
