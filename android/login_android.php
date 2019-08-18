
<?php
error_reporting(0);
require_once 'config.php';
$uname = mysql_escape_string($_POST['uname']);
$pass = mysql_escape_string($_POST['pass']);
$result = mysql_query("SELECT * FROM `login` WHERE `USERNAME`='$uname' and `PASSWORD`='$pass'");
$row = mysql_fetch_array($result);
$a = $row['USERNAME'];
$u=$row['user_id'];
$result=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	
//echo "SELECT * FROM `student` WHERE `studentid`='$u'";
$row=mysql_fetch_array($result);

if ($a == null) {
    echo'login_error';
} else {
    echo 'login_success~'.$u.'~'.$row['NAME'];;
}

							