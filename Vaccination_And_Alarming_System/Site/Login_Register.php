<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="../Css/Login_Register.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
         <!--start navbar-->
      
        <div class="navbar">
            <h1><span>V</span>SAS</h1>
            <img src="../Images/logo.jpg">
        
            
            
        </div>
        <!--end navbar-->
        
       
          <div class="container">
            
         <!--start form-->
            <div class="Log_in">
                <h1>Log In</h1>
                <!--start form-->
                <div class="form">
                    
                    <form action="../App/Controllers/logger_controller.php" method="post">
                      <h2 >User Name: </h2>
                      <input required="required" type="text" name="username" min="8" max="32" class="field">
                    
                     <h2>Password  :   </h2>
                     <input  required="required" type="password" name="password" min="8" max="32"  class="field">
                     
   
                    
                     <input type="submit"  name="LogIn" value="LogIn"   class="button"  >
                  
                </form>
                    </div> 
              
            </div>
            <!--end form-->  
            
            
            
                      
            <div class="Register">
                <!--start form-->
                 <h1>Register</h1>
                <div class="form">
                    
                    <form action="../App/Controllers/parent_Controller.php" method="post">
                 
                    <h2>Name *</h2>
                    <input required="required" name="name" type="text" value=""  class="field">
                    
                     
                     <h2>User Name *</h2>
                     <input required="required" name="username" type="text" min="8" max="32" value="" class="field">
                     
                      <h2>Password *</h2>
                      <input required="required" name="password" type="password" min="8" max="32" maxlength="32" value="" class="field">
                     
                     <h2>Email *</h2>
                       <input  required="required"  name="email" type="email" value="" class="field">
                 
                      <h2>Age *</h2>
                      <input required="required"  name="age" type="number" max="80" min="20" value="" class="field">
                     
                 
                   
                    <input  type="submit" name="submit" value="Register" class="submit"> 
                </form>
                    </div> 
                <!--end form-->
            </div>
        </div>
        
         <!--start footer-->
        <div class="footer"><h5>All rights reserved&COPY;Team</h5></div>
         <!--start footer-->
        
        
    </body>
</html>
