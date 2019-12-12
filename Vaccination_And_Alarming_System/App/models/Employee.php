<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author Mahmoud_M_Ahmed
 */
include_once 'Staff.php';
include_once 'connect.php';

class Employee  extends Staff{
   
    
    
    
    function UpdateVaccine(Vaccine $object)
    {
       
       if(($object->number)>=0) 
       {
          
           $query="UPDATE `vaccine` SET `quantity`=`quantity`+'$object->number' WHERE `name`='$object->type'";

            $sql=mysql_query($query);
            if($sql)
                {
                return true;
                }
       }
     if(($object->number)<0 )
   {
         return FALSE;
    }
 
 
             
    
     }
     
     
}
