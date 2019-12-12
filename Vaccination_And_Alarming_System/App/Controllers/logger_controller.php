<?php

if($_POST)
{
     if(isset($_POST['LogIn']) && $_POST['LogIn']=="LogIn")
    {
     include '../models/Logger.php';
     $log=new Logger();
     $log->username=$_POST['username'];
     $log->password=$_POST['password'];
    $newresult=$log->Login($log);
    if($newresult)
    {
        $row=$log->getdate($log);
        session_start();
            $log->id=$row[0];
            $log->name=$row[1];
            $log->username=$row[2];
            $log->password=$row[3];
            $log->email=$row[4];
            $log->usertype=$row[6];
            $log->age=$row[5];
             $_SESSION['id']=$log->id;
             $_SESSION['username']=$log->username;
             $_SESSION['password']=$log->password;
             $_SESSION['name']=$log->name;          
             $_SESSION['email']=$log->email;
             $_SESSION['type']=$log->usertype;
             if($log->usertype==1)
             {
                   header ('Location:http://localhost/Vaccination_And_Alarming_System/Site/Admin_Home_Page.php');
             }
         else{
             $branch=$log->getbranch($log->id);
             $_SESSION['branch']=$branch;
             if($log->usertype==2)
             {
                   header ('Location:http://localhost/Vaccination_And_Alarming_System/Site/parent_Home_Page.php');
             }
             else if($log->usertype==3)
             {
                   header ('Location:http://localhost/Vaccination_And_Alarming_System/Site/nurse_Home_Page.php');
             }
             else if($log->usertype==4)
             {
                   header ('Location:http://localhost/Vaccination_And_Alarming_System/Site/employee_Home_Page.php');
             }
             
             }
             
    }
 else
    {
         echo '<script type="text/javascript">alert("Sorry User name or password is incorrect");history.back();</script>';

         
         
    }
    
    }}
   




