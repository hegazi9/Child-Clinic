<?php 
  
               
 @$vaccine_result=count($vaccine_report_result);
 //echo @$vaccine_result;
@$parent_result=count($Parent_report_resu);
// echo $user_result;
 @$child_result=count($child_report_result);
  
 @$finished_result=count($finished_cases_report);
 //echo $rservation_result;
 @$branch_result=  count($branch_report_result);
 
 @$admins_result=  count($admin_report_result);
 
  @$employee_result=  count($employee_report_result);
  
    @$nurse_result=  count($nurse_report_result);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Report"?></title>
          <link rel="stylesheet" href="../../Libaries/normalize.css">       
          <link rel="stylesheet" href="../../Css/Report_View.css">
          
    </head>
    <body>
       
        <div class="container">   
            <!--start navbar-->
      
        <div class="navbar">
            <h1><span>V</span>SAS</h1>
            <img src="../../Images/logo.jpg">
             <ul>
                 <li><a href="../Controllers/User_Page_Contrroler.php?user=Admin" target="_self">Home</a></li>
                 <li><a href="../Controllers/Logout.php" target="_self">Log out</a> </li>
                  
                
            </ul>

            
            
        </div>
        <!--end navbar-->    
        
<h1>SyStem Reports </h1>  


<div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
 
  <thead>
  
      <?php 
       //`id`, `parentid`, `name`, `age`
         if($child_result){
       echo ' <tr>
              <th>ID</th>
              <th>ParentID</th>
              <th>Name</th>
              <th>Age</th>
              </tr>';
       
         }
         
         if($admins_result || $employee_result || $nurse_result || $parent_result)
         {
              echo ' <tr>
      <th>ID</th>
      <th>Name</th>
      <th>UserName</th>
      <th>Password</th>
      <th>Email</th>
      <th>Age</th>
      <th>UserType</th>
    </tr>'; 
         }
     
      //`id`, `dose`, `name`, `quantity`
   
  if($vaccine_result){
          echo ' <tr>
      <th>ID</th>
      <th>Dose</th>   
      <th>Name</th>
      <th>Quantity</th>
       <th>Used</th>
    </tr>';
  }
  
  
  if($finished_result)
  {
       
      echo ' <tr>
      <th>ID</th>
      <th>Name</th>   
      <th>Vaccine</th>
      <th>Location</th>
       <th>Time</th>
    </tr>';
  }
  
  
          
            if($branch_result)
  {
       
      echo ' <tr>
      <th>ID</th>
      <th>Location</th>   
      
    </tr>';
  }
  
      ?>
   
     
  </thead>
  
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php 
    
     
       
      if($parent_result)
        {
      
            for($i=0;$i<count($Parent_report_resu);$i++)
            {   
            echo "<tr>
             
                <td>{$Parent_report_resu[$i]['id']}</td>
                <td>{$Parent_report_resu[$i]['name']}</td>
                <td>{$Parent_report_resu[$i]['username']}</td>
                <td>{$Parent_report_resu[$i]['password']}</td>
                <td>{$Parent_report_resu[$i]['email']}</td>
                <td>{$Parent_report_resu[$i]['age']}</td>
                <td>{$Parent_report_resu[$i]['usertype']}</td>
             
            </tr>";
  
                }
              
              
           
        }
        
       
         if($admins_result)
        {
      
            for($i=0;$i<count($admin_report_result);$i++)
            {   
            echo "<tr>
             
                <td>{$admin_report_result[$i]['id']}</td>
                <td>{$admin_report_result[$i]['name']}</td>
                <td>{$admin_report_result[$i]['username']}</td>
                <td>{$admin_report_result[$i]['password']}</td>
                <td>{$admin_report_result[$i]['email']}</td>
                <td>{$admin_report_result[$i]['age']}</td>
                <td>{$admin_report_result[$i]['usertype']}</td>
             
            </tr>";
  
                }
        
        }
        
          if($nurse_result)
        {
      
            for($i=0;$i<count($nurse_report_result);$i++)
            {   
            echo "<tr>
             
                <td>{$nurse_report_result[$i]['id']}</td>
                <td>{$nurse_report_result[$i]['name']}</td>
                <td>{$nurse_report_result[$i]['username']}</td>
                <td>{$nurse_report_result[$i]['password']}</td>
                <td>{$nurse_report_result[$i]['email']}</td>
                <td>{$nurse_report_result[$i]['age']}</td>
                <td>{$nurse_report_result[$i]['usertype']}</td>
             
            </tr>";
  
                }
        
        }
        
        
           if($employee_result)
        {
      
            for($i=0;$i<count($employee_report_result);$i++)
            {   
            echo "<tr>
             
                <td>{$employee_report_result[$i]['id']}</td>
                <td>{$employee_report_result[$i]['name']}</td>
                <td>{$employee_report_result[$i]['username']}</td>
                <td>{$employee_report_result[$i]['password']}</td>
                <td>{$employee_report_result[$i]['email']}</td>
                <td>{$employee_report_result[$i]['age']}</td>
                <td>{$employee_report_result[$i]['usertype']}</td>
             
            </tr>";
  
                }
        
        }
        
        
            if($child_result){
            for($i=0;$i<count($child_report_result);$i++)
            {   //`id`, `parentid`, `name`, `age`
            echo "<tr>
             
                <td>{$child_report_result[$i]['id']}</td>
                <td>{$child_report_result[$i]['parentid']}</td>
                <td>{$child_report_result[$i]['name']}</td>
                <td>{$child_report_result[$i]['age']}</td>
                
             
            </tr>";
            }
            }

       
     if($vaccine_result)
        {
   //$vaccine_result 
    for($i=0;$i<count($vaccine_report_result);$i++)
    {

              echo 
            "
             <tr>
                <td>{$vaccine_report_result[$i]['id']}</td>
                <td>{$vaccine_report_result[$i]['dose']}</td>
                <td>{$vaccine_report_result[$i]['name']}</td>
                <td>{$vaccine_report_result[$i]['quantity']}</td>
                <td>{$vaccine_report_result[$i]['used']}</td>
            
             </tr>";
           
         
        }
        }
        
         if($finished_result)
        {
   //$vaccine_result 
    for($i=0;$i<count($finished_cases_report);$i++)
    {

              echo 
            "
             <tr>
                <td>{$finished_cases_report[$i]['id']}</td>
                <td>{$finished_cases_report[$i]['name']}</td>
                <td>{$finished_cases_report[$i]['vaccine']}</td>
                <td>{$finished_cases_report[$i]['location']}</td>
                <td>{$finished_cases_report[$i]['time']}</td>
            
             </tr>";
           
         
        }
        }
        
         if($branch_result)
         {
              for($i=0;$i<count($branch_report_result);$i++)
    {

              echo 
            "
             <tr>
                <td>{$branch_report_result[$i]['id']}</td>
                <td>{$branch_report_result[$i]['location']}</td>
                
            
             </tr>";
           
         
        }
         }

   
   ?>
    
  </tbody>
</table>
</div>
<div class="total">
       <?php
if($child_result)
{
    echo '<h2>Total Number Of Childs : </h2>'.$child_result;
}

if($parent_result)
{
    echo '<h2>Total Number Of Registers(Parents) : </h2>'.$parent_result;
}

if($vaccine_result)
{
    echo '<h2>Total Number Of Vaccines : </h2>'.$vaccine_result;
}

if($finished_result)
{
    echo '<h2>Total Number Of Finished Cases : </h2>'.$finished_result;
}


if($admins_result)
{
    echo '<h2>Total Number Of  Admins : </h2>'.$admins_result;
}

if($employee_result)
{
    echo '<h2>Total Number Of  Employees : </h2>'.$employee_result;
}

if($nurse_result)
{
    echo '<h2>Total Number Of  Nurses : </h2>'.$nurse_result;
}


if($branch_result)
{
    echo '<h2>Total Number Of  Branches : </h2>'.$branch_result;
}
?>
     
</div>
           <!--start footer-->
        <div class="footer"><h5>All rights reserved&COPY;Team</h5></div>
         <!--End footer-->
        </div>

        
        
    </body>
</html>
