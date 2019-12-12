<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo " Report"?>;</title>
          
         
  
          
        <link rel="stylesheet" href="../Css/Report_Form.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
        
    </head>
    <body>
         
    
        
            <form action="../App/Controllers/System_Controller.php" method="post" class="form">
          
            <h1>SyStem Reports </h1>
            <select name="tables" class="button">
                 <option value="admin">Admins</option>
                <option value="User">Parents</option>
                <option value="vaccine">Vaccine</option>
                <option value="child">Childs</option>
                <option value="finished">Finished Cases</option>
                <option value="employee">Employees</option>
                <option value="nurse">Nurses</option>
                 <option value="branch">Branches</option>
            </select>
            
     
            <input type="submit" name="submit" value="submit" class="button">
            
          
              
        </form>   
  



        
        
    </body>
</html>
