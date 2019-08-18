
<?php

error_reporting(0);


if ($_POST['Series'] == 'Series 1') {
    require_once 'config.php';
    $u = $_POST['id'];

    $result = mysql_query("select Series1_Mark from EXAM where StudentID='$u'");

    
    $row = mysql_fetch_array($result);

  
    
     

    echo $row['Series1_Mark'];
}
if ($_POST['Series'] == 'Series 2') {
    require_once 'config.php';
    $u = $_POST['id'];

    $result = mysql_query("select Series2_Mark from EXAM where StudentID='$u'");

    $row = mysql_fetch_array($result);

   
  

    echo $row['Series2_Mark'];
}
    
    

   
    
	