<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Invoice
 *
 * @author Mahmoud_M_Ahmed
 */
class Invoice {
   
    
   
    private $Equipement_costs;
    private $costs;
    private  $expoenses;
    private $employeeid;
            function __construct($invoice) {
                $this->Equipement_costs=$invoice["equipment"];
                $this->costs=$invoice["cost"];
                $this->expoenses=$invoice["expenses"];
                $this->employeeid=$invoice["employeeid"];
                echo $this->employeeid;
    }
    
    
    function  purchases_value()
    {
        
    }
     function  AddInvoices()
     {
         
       $query="INSERT INTO `invoice` (`id`,`cost`,`dateid`, `employeeid`,`costOfExpenses`, `equipment_cost`) VALUES ('','$this->costs', '1','$this->employeeid','$this->expoenses', '$this->Equipement_costs')";
$result =  mysql_query($query);
if ($result)
    {
    return TRUE;
    }
    else        return FALSE ;
         
         
     }
     
}
