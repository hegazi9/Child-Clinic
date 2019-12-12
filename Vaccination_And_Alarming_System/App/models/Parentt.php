<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Mahmoud_M_Ahmed
 */
include_once 'logger.php';
class Parentt extends logger{
 
   
    function  register(parentt $object)
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
            return true;  
            }
        else {
            return false;
                                
             }
         }
        
        
        else {
                 return FALSE;
             }
    
     }
     function edit_pofile(parentt $a)
     {
         {
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
     }  
     function add_child(Child $a)
     {
        $query = "INSERT INTO `child`(`id`, `parentid`, `name`, `age`) VALUES ('','$a->parent_id','$a->name','$a->age')";
        $quert=  mysql_query($query);
        
        if($quert)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
     }
     function getallchilds($id)
     {
         $query="SELECT * FROM `child` WHERE `parentid`=$id";
         $sql=  mysql_query($query);
         if($sql)
         {
             $num=  mysql_num_rows($sql);
             if($num>0)
             {
                 For($i=0;$i<$num;$i++)
                 {
                     $data[$i]=  mysql_fetch_array($sql);
                 }
             }
             return $data;
         }
     }
     
     
     function reserve_appointment(Reservation $a)
     {
         
      $query="INSERT INTO `reservation`(`id`, `branchid`, `childid`, `date`, `time`, `vaccineid`, `parentid`) VALUES ('','$a->branch','$a->child_id','$a->r_date','$a->r_time','$a->vaccine_id','$a->parent_id')";
      $sql=  mysql_query($query);
      if($sql)
      {
          return TRUE;
      }
      else
      {
          return FALSE;
      }
     }
     function reschedule_appointment(Reservation $r)
     {
         $query="UPDATE `reservation` SET `time`='$r->r_time',`date`='$r->r_date' where id='$r->parent_id'";
         $sql=  mysql_query($query);
         if($sql)
         {
         return TRUE;
         }
         else 
          {
             return FALSE;
          }
     }
     
        function reservation_history($id)
     {
         $data=array();
         $query="SELECT child.name, vaccine.name as vaccine, branch.location, reservation.time, reservation.id,reservation.date,reservation.creationdate
                 FROM reservation
                 INNER JOIN child on reservation.childid=child.id
                 INNER JOIN vaccine on reservation.vaccineid=vaccine.id
                 INNER join branch on reservation.branchid=branch.id
                 WHERE reservation.parentid=$id";
         $sql=  mysql_query($query);
         if($sql)
         {
             $num=  mysql_num_rows($sql);
             if($num>0)
             {
                 For($i=0;$i<$num;$i++)
                 {
                     $data[$i]=  mysql_fetch_array($sql);
                 }
             }
             return $data;
         }
         
     }
     function getreservationbyid($id)
     {
         $query="SELECT child.name, branch.location, date, vaccine.name AS vaccine, reservation.childid,reservation.branchid,
                 reservation.id,reservation.vaccineid
                 FROM reservation 
                 INNER JOIN child ON reservation.childid=child.id
                 INNER JOIN vaccine ON reservation.vaccineid=vaccine.id
                 INNER JOIN branch ON reservation.branchid=branch.id
                    WHERE reservation.id=$id";
         $sql=  mysql_query($query);
         if($sql)
         {
             $row=  mysql_fetch_array($sql);
         }
         return $row;

     }
     function getnotify($id)
     {
         $query="SELECT * FROM `notifications` WHERE `destid` ='$id'";
         $sql=  mysql_query($query);
         if($sql)
         {
             $num=  mysql_num_rows($sql);
             if($num>0)
             {
                 For($i=0;$i<$num;$i++)
                 {
                     $data[$i]=  mysql_fetch_array($sql);
                 }
             }
             return $data;
         }
     }
 
     
     
}
