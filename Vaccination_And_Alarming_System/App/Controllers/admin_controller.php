<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['Submit']) && $_POST['Submit']=="Submit")
     {
      include '../models/staff.php';
      include '../models/admin.php';
      $data=new Staff();
      $data->name  =$_POST['name'];
      $data->username=$_POST['username'];
      $data->password=$_POST['password'];
      $data->email =$_POST['email'];
      $data->age=$_POST['age'];
      $data->usertype=$_POST['usertype'];
      $data->branch=$_POST['branch'];
      $admin=new Admin();
      $result=$admin->adduser($data);
      if($result)
      {
        echo '<script type="text/javascript">alert("new user was added");history.back();</script>';

         // echo 'successed';
      }
 else {
        echo '<script type="text/javascript">alert("sorry failed to add");history.back();</script>';
         // echo 'failed';
      }
      
     }
     // search by id for user
     Else if(isset($_POST['Search']) && $_POST['Search']=="Search")
     {
      include '../models/logger.php';
      include '../models/admin.php';
         $user=$_POST['id'];
         $admin=new Admin();
         
         
         $log=$admin->Search($user);
         if($log!=0)
             
         {
             include '../../Site/viewpage.php';
         }
        else 
            {
            
          echo '<script type="text/javascript">alert("not found");history.back();</script>';
            }
         
             
  
     }
     //delete user by id
     ELSE if(isset($_POST['Delete']) && $_POST['Delete']=="Delete")
     {
         
         include '../models/admin.php';
         $user=$_POST['id'];
         $admin=new Admin();
         $res=$admin->delete($user);
         if($res)
         {
             
            echo '<script type="text/javascript">alert("successful delete");history.back();</script>';
             
         }
        else 
            {
             echo '<script type="text/javascript">alert("sorry not found");history.back();</script>';
            }
         
     }
     //update user
     else if(isset($_POST['Update']) && $_POST['Update']=="Update")
     {
         include '../models/admin.php';
         $user=$_POST['id'];
         $admin=new Admin();
         $row=$admin->Search($user);
         if($row!=0)
             
         {
             
            include '../../Site/update_user.php';
            
         }
         else 
         {
             echo '<script type="text/javascript">alert("sorry not found");history.back();</script>';;
         }
     }
     
     else if(isset($_POST['submit']) && $_POST['submit']=="Update")
             {
                
                include '../models/admin.php';
                $admin=new Admin();
                $a=new Logger();
                $a->id=$_POST['id'];
                $a->name=$_POST['name'];
                $a->username=$_POST['username'];
                $a->password=$_POST['password'];
                $a->email =$_POST['email'];
                $a ->age =$_POST['age'];
                $a->usertype=$_POST['usertype'];
               
                $resultt=$admin->UpdateUser($a);
                if($resultt)
                {
                    
                    echo '<script type="text/javascript">alert("updated");history.back();</script>';
                }
                else
                {
                    echo '<script type="text/javascript">alert("sorry failed");history.back();</script>';
                }
             
             }
           
     

