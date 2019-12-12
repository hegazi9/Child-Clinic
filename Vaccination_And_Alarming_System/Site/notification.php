<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Reservation history";?></title>
       
        <link rel="stylesheet" href="../Css/Reservation_History.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
               
        <div class="container">
            <h2> notification </h2>
       
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
 
  <thead>

       <tr>
            <th>message</th>
            <th>time</th>
            
           
      </tr>
       

  </thead>
  
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php 
    
     
      for($i=0;$i<count($result);$i++)
            {
            echo "<tr>
                
               
                <td>{$result[$i]['massege']}</td>
                    <td>{$result[$i]['creation']}</td>
               
                
                
            </tr>";
            }

   
   ?>
    
  </tbody>
</table>
</div>

        </div>    
            
               
            
           
      
    </body>
</html>
