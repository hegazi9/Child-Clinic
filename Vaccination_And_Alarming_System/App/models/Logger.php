<?php
include_once 'connect.php';
include_once 'Person.php';
class Logger extends Person{
  public $email;
  public $usertype;
  public $username;
  public  $password;

     /* function connectToDB()
    {
        include 'Database.php';
        $vars="../include/Variables.php";  
        $cxn=new Database($vars);
        $cxn->connect();

    }*/
    function Login(logger $log)
    {
       // $this->connectToDB();
        $query="SELECT * FROM `user` WHERE username='$log->username' AND password='$log->password'";
        $result= mysql_query($query);
        if($result)
        {
            if(mysql_num_rows($result)>0)
            {
                return TRUE; 
            }
            else {
                return FALSE;
            }
        }
    }
    function getdate(Logger $log)
    {
   
        $query="SELECT * FROM `user` WHERE username='$log->username' AND password='$log->password'";
        $result= mysql_query($query);
        if($result)
        {
            if(mysql_num_rows($result)>0)
            {
                $row=  mysql_fetch_array($result);
                return $row;
            }
        }
    }
    function getbranch($id)
    {
        $quer="SELECT `branchid` FROM `userbranch` WHERE `userid`='$id'";
        $sql=  mysql_query($quer);
        if($sql)
        {
            $res=  mysql_fetch_array($sql);
            $b=$res[0];
            return $b;
        }
    }
    function getpages()
    {
        $query="SELECT pages.url FROM pages
                INNER JOIN usertypepages on pages.id=usertypepages.pageid
                WHERE usertypepages.userid=2";
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
