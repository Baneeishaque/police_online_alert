
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faculty Searching Option</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result2=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	
//echo "SELECT * FROM `student` WHERE `studentid`='$u'";
$row2=mysql_fetch_array($result2);

echo'     <!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			<div id="top-navigation">
				<a href="#"><strong>';
echo $row2['NAME'];
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
                         //   <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                           echo ' <li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php" class="active"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>';
?>

<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Notifications</h2>
					</div>
					<!-- End Box Head -->
					<form >
					<div class='form'>
					<table class="reference">
					<tr>
                                            <th>Title</th>
					
					
					<th>Message</th>
                                        <th>Provider</th>
					</tr>
                                             <?php
      
        
        require_once 'config.php';
        $u=$_SESSION["user_id"];

$result3=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	

$row3=mysql_fetch_array($result3);
$sem=$row3['SEM'];
$branch=$row3['BRANCH'];

$result=mysql_query("SELECT FacultyID, Title, Message, NotificationID FROM Notification WHERE Sem like '%$sem%' AND Dept = '$branch' ORDER BY NotificationID DESC");
//echo "SELECT FacultyID, Title, Message, NotificationID FROM Notification WHERE Sem like '%$sem%' AND Dept = '$branch' ORDER BY NotificationID DESC";

while ($row = mysql_fetch_array($result)) {

                                  
                                 echo '<tr>
                                        <td>';
                                 
                                 echo $row['Title'];
                                 echo '</td>
                                        <td>';
                                  
                                 echo $row['Message'];
                                 echo '</td>
                                        <td>';
                              
                             
                              echo $row['FacultyID'];
                                 echo '</td>
                                        
                                    </tr>';
                                }

					
                                echo '</table>
					</div>
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->';
?>

	  <?php
        require("footer.php");
        ?>

<!-- End Footer -->
	
</body>
</html>