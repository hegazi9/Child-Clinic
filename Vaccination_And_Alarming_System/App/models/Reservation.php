<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author Mahmoud_M_Ahmed
 * 
 */

class Reservation {
   
    public $child_id;
    public $parent_id;
    public $vaccine_id;
    public $r_date;
    public $r_time;
    public $branch;
    public $r_date_time;
    
    
    function __construct() {
        
    }
    
    function r_done()
    {
        
    }
    
     function r_reschudle()
    {
        
    }
    function getallvaccines()
     {
         $query="SELECT * FROM `vaccine` WHERE `quantity`>0";
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
     function getalllocations()
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
     function select_avillabletimes($date,$loc)
     {
         $query="SELECT  `time`  FROM `reservation` WHERE `date` = '$date' AND branchid='$loc'";
         $sql=  mysql_query($query);
         $data=array();
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
