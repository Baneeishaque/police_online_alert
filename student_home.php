<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Student Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	
//echo "SELECT * FROM `student` WHERE `studentid`='$u'";
$row=mysql_fetch_array($result);
echo '<div id="header">
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
                           // <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                           echo ' <li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>';


echo '
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		
		<!-- End Small Nav -->	
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
					<table class="reference">
 <tr>
  <td>Name  </td>
  <td>'; 
echo $row['NAME'];
//echo '22-10-2002';
echo '
</td>
 </tr>
 <tr>
  <td>Date of Birth  </td>
  <td>'; 
echo $row['DOB'];
//echo '22-10-2002';
echo '
</td>
 </tr>
 <tr>
  <td>Sex </td>
  <td>';
echo $row['SEX'];
echo'    
      </td>
 </tr>
 <tr>
  <td>Branch </td>
  <td>';
switch ($row['BRANCH'])
 {
     case "Automobile"  :   echo 'Automobile Engineering';
         break;
     case "Civil"  :   echo 'Civil Engineering';
               break;                                 
     case "Computer"  :   echo 'Computer Engineering';
         break;
     case "Elactrical"  :   echo 'Electrical Engineering';
         break;
     case "Electronics"  :   echo 'Electronics Engineering';
         break;
     case "Mechanical"  :   echo 'Mechanical Engineering';
 }
echo '</td>
 </tr>
 <tr>
  <td>Semester </td>
  <td>';
echo $row['SEM'];
echo '</td>
 </tr>
  <tr>
  <td>Address</td>
  <td>';
echo $row['ADDRESS'];
echo '</td>
 </tr>
  <tr>
  <td>City </td>
  <td>';
echo $row['CITY'];
echo '</td>
 </tr>
  <tr>
  <td>State </td>
  <td>';
echo $row['STATE'];
echo '</td>
 </tr>
   <tr>
  <td>PinCode </td>
  <td>';
echo $row['PIN'];
echo '</td>
 </tr>
    <tr>
  <td>E-mail </td>
  <td>';
echo $row['EMAIL'];
echo '</td>
 </tr>
  <tr>
  <td>Mobile </td>
  <td>';
echo $row['PHNNO'];
echo '</td>
 </tr>
 <tr>
  <td>Guardian E-mail </td>
  <td>';
echo $row['PAREMAIL'];
echo '</td>
 </tr>
 <tr>
  <td>Guardian Phone </td>
  <td>';
echo $row['PARPHN'];
echo '</td>
 </tr>
</table>
				<!-- End Box -->

			</div>
			<!-- End Content -->';

echo '<!-- Sidebar --> 
			

			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					
					<!-- End Box Head-->
					
					<div class="box-content">
                                            <img src="profile_images/';
echo $row['Image_Name'];
echo '" width="203" height="250" alt="Jellyfish"/>
                                            <br/>
                                            <br/>
                                      
                                           
						<a href="student_edit_profile.php" class="add-button"><span>Update Profile</span></a>
						<div class="cl">&nbsp;</div>
                                               
						
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			


			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->


<!-- Footer -->';

require("footer.php");

echo '<!-- End Footer -->
	
</body>
</html>';