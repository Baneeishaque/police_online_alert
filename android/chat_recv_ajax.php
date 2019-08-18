<?php

    error_reporting(0);
     require_once('dbconnect.php');

    
     db_connect();
     
     $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
     
     // Update Row Information

   
     while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
     {
        
    $msg = $msg  ."[". $line["cdt"]."] " 
                . $line["username"] . " : " 
                 . $line["msg"]."~" ;
         
 
           
     }
     
     
     echo $msg;







