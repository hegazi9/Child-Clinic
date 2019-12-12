    
<?php
     session_start();
if (!isset($_SESSION['username']))
{
    include 'login_register.php';
    die();
}
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
        <title><?php echo "Vaccination And Alarming System";?></title>
        <link rel="stylesheet" href="../Css/Parent_Home_Page.css">
         <link rel="stylesheet" href="../Libaries/normalize.css">
          <link rel="stylesheet" href="../../Css/Parent_Home_Page.css">
         <link rel="stylesheet" href="../../Libaries/normalize.css">
    </head>
    <body>
       <?php
    
       ?>
        <!--start container-->
        <div class="container">
            
        
        <!--start navbar-->
        <div class="navbar">
            
          
              <h1>V<span>SAS</span></h1>
                <ul>
                  
                    <li class="part"><a href='../App/Controllers/Logout.php' >Log out</a> </li>
                  <li><a href="?page=contact_us">Contact us</a></li> 
                   <li><a href="?page=FeedBack">Feedback </a></li>
                   <li><a href="?page=../App/Controllers/parent_controller&action=update">Edit Profile </a></li>
                   
                   <li><a href="">Services</a>
                       <ul>
                   <li><a href="?page=../App/Controllers/parent_controller&action=view">Reserve Appointment </a></li>
                  <li><a href="?page=../App/Controllers/parent_controller&action=history">Reservation History </a></li>
                   <li><a href="?page=add_Child">  Add_child </a></li>  
                   <li><a href="?page=Child_Report">Child_Report</a></li>  
                   <li><a href="?page=../App/Controllers/parent_controller&action=notify" >Notifications</a></li> 
                           </ul>
                   </li>  
                  
                  <li><a href="../App/Controllers/User_Page_Contrroler.php?user=Parent">Home</a></li>
                  

        
        </ul>    
           
   
        </div>
     
        <!--end navbar-->
        
        
        <!--start cover-->
        <div class="cover">
         <?php
              if(@$_GET['page'])
              {
                  $url=$_GET['page'].".php";
                  include $url;
              }
                

                
            
              ?>
            
        </div>
        <!--end cover-->
        
        <!--start footer-->
        <div class="footer"><h5>All Rights Reserved&COPY;Team</h5></div>
         <!--start footer-->

        </div>
        <!--end container-->
    </body>
</html>
