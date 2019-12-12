<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Mahmoud_M_Ahmed
 */
class Database {
   private $host;
    private $user;
    private $password;
    private $database;
    
    function __construct($filename) {
        if(is_file($filename)){
        include $filename;
        
        }
        else {
            throw  new Exception("Error can not include file");
        }
        
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;
        
        
    }
    
    public function connect()    
    {
        
        //connect to server
        if(!mysql_connect($this->host,  $this->user,  $this->password)){
            throw new Exception("Can not to server");
        }
        //connect to Database
                
        if(!mysql_select_db($this->database,mysql_connect($this->host, $this->user, $this->password)))
        {
             throw new Exception("Can not to Database");
        }
        
    }
    
    function close()
           {
               mysql_close();
           }
    
}
