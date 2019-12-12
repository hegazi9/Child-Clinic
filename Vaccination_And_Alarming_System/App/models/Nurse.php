<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nurse
 *
 * @author Mahmoud_M_Ahmed
 */
include_once 'Staff.php';
include_once 'connect.php';

class Nurse extends Staff{
    
 
    
    function ControlVaccine(Vaccine $log)
    {
      if($log->quantity==1)
      {
          $query1="UPDATE `vaccine` SET `quantity`=`quantity`-1,`used`=`used`+1 WHERE `id`='$log->id'";
          $sql1=  mysql_query($query1);
          if($sql1)
          {
              return TRUE;
          }
          else
          {
              return FALSE;
          }
      }
 else {
          $query2="UPDATE `vaccine` SET `quantity`=`quantity`+'$log->quantity' WHERE `id`='$log->id'";
          $sql2=  mysql_query($query2);
          if($sql2)
          {
              return TRUE;
          }
          else
          {
              return FALSE;
          }
      }
     }
     function getreservation($id)
     {
         $data=array();
         $today = date('Y-m-d');
         $query="SELECT child.name, vaccine.name as vaccine, reservation.time, reservation.id
                 FROM reservation
                 INNER JOIN child on reservation.childid=child.id
                 INNER JOIN vaccine on reservation.vaccineid=vaccine.id
                 INNER join branch on reservation.branchid=branch.id
                 WHERE reservation.branchid=$id and reservation.date='$today'";
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
     function Addnewvaccine(Vaccine $v)
     {
         $query="INSERT INTO `vaccine`(`id`, `dose`, `name`, `quantity`, `used`) VALUES ('','$v->dose','$v->name','$v->quantity',0)";
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
     function sendnotify($message,$id)
     {
         $query="INSERT INTO `notifications`(`id`, `massege`, `destid`) VALUES ('','$message','$id')";
         $sql=  mysql_query($query);
         if($sql)
         {
             return true;
         }
     }
     function Reschedule($id)
     {
         $nurse=new Nurse();
         $NewDate=Date("Y-m-d", strtotime("1 days"));
         $time=strtotime("9:00:00");
         $query="UPDATE reservation SET date='$NewDate' ,time='$time' WHERE `id`='$id'";
         $sql=  mysql_query($query);
         if($sql)
             
         {   
             $query2="SELECT `parentid` FROM `reservation` WHERE `id`=$id";
             $sql2=  mysql_query($query2);
             if($sql2)
             {
                 $id=  mysql_fetch_array($sql2);
                 $pid=$id[0];
                 $message="your Child Reservation has been rescheduled please try to choose another time";
                 $nurse->sendnotify($message,$pid);
             }
                 
             return TRUE;
             
         }
         else
         {
                return FALSE;
         }
     }
     
     
     
     
     
    }
   
    
   