<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of System
 *
 * @author Mahmoud_M_Ahmed
 */
include_once 'connect.php';
class System {
    
   
    
        
    function __construct() {
        
    }
    
    public  function RegistersReport()
    {
             $query="SELECT * FROM `user`  WHERE `usertype`='2'";
            
       
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
      public  function VaccineReport(){
          
  
             $query="SELECT * FROM `vaccine` ";
            
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
     
          function getallchilds()
     {
         $query="SELECT * FROM `child`";
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
     function finishedcasses()
     {
         $data=array();
         $today = date('Y-m-d');
         $query="SELECT child.name, vaccine.name as vaccine, reservation.time, reservation.id ,branch.location FROM reservation
                 INNER JOIN child on reservation.childid=child.id
                 INNER JOIN vaccine on reservation.vaccineid=vaccine.id
                 INNER join branch on reservation.branchid=branch.id
                 WHERE reservation.date='$today'";
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
     
     function AdminReport()
     {
         $query="SELECT * FROM `user` WHERE `usertype`='1'";
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
    
     function NurseReport()
     {
         $query="SELECT * FROM `user` WHERE `usertype`='3'";
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
     
     
     function EmployeeReport()
     {
         $query="SELECT * FROM `user` WHERE `usertype`='4'";
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
     
      function  BranchReport()
     {
         $query="SELECT * FROM `branch`";
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
