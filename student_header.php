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
			    <li><a href="#" class="active"><span>Profile</span></a></li>
                            <li><a href="student_result.php"><span>View Result</span></a></li>
                            <li><a href="student_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="chat/student_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="student_downloads.php"><span>Downloads</span></a></li>';

//                            <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                            echo '<li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>';
