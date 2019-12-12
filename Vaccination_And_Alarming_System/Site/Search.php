<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Search";?></title>
        <link rel="stylesheet" href="../Css/Search.css">
         <link rel="stylesheet" href="../Libaries/normalize.css">
         <link rel="stylesheet" href="../../Css/Search.css">
         <link rel="stylesheet" href="../../Libaries/normalize.css">
    </head>
    <body>
            <!--start container-->
        <div class="container">
            
   

        
        
        <!--start cover-->
        <div class="cover">
            
            <form action="../App/Controllers/admin_Controller.php" method="post">
                
                
                <h1>Enter User Id :</h1>
                <input type="number" required="required" name="id" value="">
                <input type="submit" name="Search" value="Search" class="button">
                <input type="submit" name="Update" value="Update" class="button">
                <input type="submit" name="Delete" value="Delete" class="button">
                
                
                
            </form>      
          
        </div>
        <!--end cover-->
        
       

        </div>
        <!--end container-->
        <?php
        // put your code here
        ?>
    </body>
</html>
