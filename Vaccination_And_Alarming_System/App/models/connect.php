<?php

$connect=  mysql_connect("localhost", "root",'');
if($connect)
{
   $db=  mysql_select_db("vsas");
   if ($db) {
       // echo 'connected';
    }
}


