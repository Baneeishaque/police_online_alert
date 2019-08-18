<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Attendance Checker</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script src="jquery-2.1.1.min.js"></script>
</head>
<body>
    <?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	
//echo "SELECT * FROM `student` WHERE `studentid`='$u'";
$row=mysql_fetch_array($result);

echo'     <!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			<div id="top-navigation">
				<a href="#"><strong>';
echo $row['NAME'];
echo '</strong></a>
				
				<span>|</span>
				
				
                                <a href="index.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
                            <li><a href="student_home.php" ><span>Profile</span></a></li>
                            <li><a href="student_result.php"><span>View Result</span></a></li>
                            <li><a href="student_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="chat/student_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="student_downloads.php"><span>Downloads</span></a></li>';
			   // <li><a href="#" class="active"><span>View Attendance</span></a></li>
                         echo '   <li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>';
?>

<!-- End Header -->

<!-- Container -->

                                        <input  id="text"  />
					
				<div class="box2">
					
					
				</div>
				<!-- End Box -->
                                <script>
           $(document).ready(function(){
               $('#text').change(function(){
                   $.ajax({
                       type : 'GET',
                       url : 'textreturn.php',
                       data : 'text='+$('#text').val(),
                       success : function(msg)
                       {
                           $('#box2').html(msg);
                       }
                   });
               });
           });
       </script>

			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<?php
require("footer.php");
?>
<!-- End Footer -->
	
</body>
</html>