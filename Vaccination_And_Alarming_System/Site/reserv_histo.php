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
            <h2> Reservation History Report</h2>
       
<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
 
  <thead>

       <tr>
            <th>Reservation ID</th>
            <th>Child Name</th>
            <th>Vaccine Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Branch</th>
            <th>Creation Date</th>
            <th>action </th>
           
      </tr>
       

  </thead>
  
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php 
    
     
      for($i=0;$i<count($resu);$i++)
            {
            echo "<tr>
                
                <td>{$resu[$i]['id']}</td>
                <td>{$resu[$i]['name']}</td>
                <td>{$resu[$i]['vaccine']}</td>
                <td>{$resu[$i]['date']}</td>
                <td>{$resu[$i]['time']}</td>
                <td>{$resu[$i]['location']}</td>
                <td>{$resu[$i]['creationdate']}</td>
                <td><a href='?page=../App/Controllers/parent_controller&id={$resu[$i]['id']}&action=reschedule'>Reschedule</a></td>
                
                
            </tr>";
            }

   
   ?>
    
  </tbody>
</table>
</div>

        </div>    
            
               
            
           
      
    </body>
</html>
