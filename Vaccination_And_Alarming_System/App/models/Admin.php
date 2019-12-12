<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Mahmoud_M_Ahmed
 */
include_once 'connect.php';
include_once 'Staff.php';
class Admin extends Staff{
  
    
    
    public function setId($data)
    {
         $this->id=$data;
    }
    
    function  adduser(Staff $object)
    {
        $qu_username="SELECT * FROM `user` WHERE `username`='$object->username'";
        $username_result=mysql_query($qu_username);
        $qu_email="SELECT * FROM `user` WHERE `email`='$object->email'";    
        $email_result=  mysql_query($qu_email); 
        if(mysql_num_rows($username_result)==0 && mysql_num_rows($email_result)==0)
        {
        $query="INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `age`, `usertype`) VALUES ('','$object->name', '$object->username', '$object->password','$object->email','$object->age', '$object->usertype')";
        $sql=mysql_query($query);
        if($sql)
            {
            $quer="SELECT `id` FROM `user` WHERE username='$object->username' AND password ='$object->password'";
            $sql2=  mysql_query($quer);
            if($sql2)
                
            {
                $result=  mysql_fetch_array($sql2);
                $result2=$result[0];
                $query2="INSERT INTO `userbranch`(`id`, `branchid`, `userid`) VALUES ('','$object->branch','$result2')";
                $sql3=  mysql_query($query2);
                if($sql3)
                {
            return true;  
                }
                
            }   
            }
        else {
            return false;
                                
             }
         }
        
        
        else {
              return FALSE;
             }
    
     }
     
        
 function  Search($id)
        {
     
        $query="SELECT * FROM `user` WHERE `id`='$id'";
        $sql=mysql_query($query);
        if((mysql_num_rows($sql))>0)
        {
            
            $row = mysql_fetch_array($sql); 
            return $row;
        }
        else
        {
           
            return 0;
        }}
   
        
         
    
    
    function UpdateUser(Logger $a)
    {
        
       /* $qu_username="SELECT `username` FROM `user` WHERE `username`='$a->username'";
        $username_result=mysql_query($qu_username);
        $qu_email="SELECT `email` FROM `user` WHERE `email`='$a->email'";    
        $email_result=  mysql_query($qu_email);
        if(mysql_num_rows($username_result)==0 && mysql_num_rows($email_result)==0)
            {*/
            $query="UPDATE `user` SET `name`='$a->name',`username`='$a->username',`password`='$a->password',`email`='$a->email',`age`='$a->age',`usertype`='$a->usertype' WHERE `id`='$a->id'";
            $sql=mysql_query($query);
            if($sql)
                {
                return TRUE;             
                               
                }
            
              else
                {
                   return FALSE;
                }
     }
     function delete($id)
     {
        $result= $this->Search($id);
        if($result!=0)
        {
            $query="DELETE FROM `user` WHERE `id`='$id'";
            $sql=mysql_query($query);
            if($sql)
            {
                return true;
            }
            else
            {
                return FALSE;
            }
        }
     }
     
}