<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faculty Profile Updation</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			                       <?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];

$result=mysql_query("SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'");	

$row=mysql_fetch_array($result);

echo '
			<div id="top-navigation">
                            
				<a href="faculty_home.php"><strong>';
echo $row['Faculty_Name'];
echo '</strong></a>
				
				<span>|</span>
				
			
				
                                <a href="index.php">Log out</a>
			</div>';


       
        

        if (isset($_POST['submit'])) {
            
		
		
		$address = mysql_escape_string($_POST['address']);
                $city = mysql_escape_string($_POST['city']);
		$phone = mysql_escape_string($_POST['phone']);
		$state = mysql_escape_string($_POST['state']);
		$pin = mysql_escape_string($_POST['pin']);
                $email = mysql_escape_string($_POST['email']);
		//echo "UPDATE `faculty` SET `ADDRESS`='$address',`CITY`='$city',`STATE`='$state',`PIN`='$pin',`EMAIL`='$email',`PHNNO`='$phone' WHERE `Faculty_ID`='$u'";
		     if(mysql_query("UPDATE `faculty` SET `ADDRESS`='$address',`CITY`='$city',`STATE`='$state',`PIN`='$pin',`EMAIL`='$email',`PHNNO`='$phone' WHERE `Faculty_ID`='$u'"))
     {
          echo '<script>

					alert("Updation Success");

				</script>
				';
                   header('Refresh:1;URL=faculty_home.php');
     }
 else {
          echo '<script>

					alert("Error on updation");

				</script>
				';
     }
              
 
        }
                        ?>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
                            <li><a href="faculty_home.php"><span>Profile</span></a></li>
                            <!--<li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
                            <li><a href="faculty_upload_notes.php"><span>Upload Study Materials</span></a></li>
                            <li><a href="faculty_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="faculty_upload_result.php"><span>Upload Result</span></a></li>
                            <li><a href="faculty_parent_memo.php"><span>Parent Memo</span></a></li>
                            <li><a href="chat/faculty_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="faculty_post_notification.php"><span>Post Notification</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>


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
						<h2>Faculty Personal Details</h2>
					</div>
					<!-- End Box Head -->
					<?php

require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result=mysql_query("SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'");	
//echo "SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'";
$row=mysql_fetch_array($result);
echo '<form action="faculty_edit_profile.php" method="post">
					<table class="reference">

 
 <tr>
  <td>NAME</td>
  <td> ';
echo $row['Faculty_Name'].'</td>
 </tr>
 <tr>
  <td>DOB</td>
  <td>';
echo $row['DOB'].'</td>
 </tr>
 <tr>
  <td>SEX</td>
  <td> ';
echo $row['SEX'].'</td>
 </tr>
  <tr>
  <td>Branch</td>
  <td>';
switch ($row['DEPTID'])
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
 
  
 <tr>
  <td>Designation</td>
  <td>';
 echo $row['DESIG'].'</td>
 </tr>
  <tr>
  <td>Qualification</td>
  <td>';
 echo $row['QUALIFICATION'].'</td>
 </tr>
 <tr>
  <td>ADDRESS</td>
  <td><input type="text" name="address" value="';
 echo $row['ADDRESS'];
 echo '"/></td>
 </tr>
   <tr>
  <td>City</td>
  <td><input type="text" name="city" value="';
 echo $row['CITY'].'"/></td>
 </tr>
    <tr>
  <td>State</td>
  <td><input type="text" name="state" value="';
 echo $row['STATE'].'"/></td>
 </tr>
  <tr>
  <td>PIN</td>
  <td><input type="text" name="pin" value="';
 echo $row['PIN'].'"/></td>
 </tr>
 </tr>
  <tr>
  <td>EMAIL</td>
  <td><input type="text" name="email" value="';
 echo $row['EMAIL'].'"/></td>
 </tr>
 <tr>
  <td>PHNNO</td>
  <td><input type="text" name="phone" value="';
 echo $row['PHNNO'].'"/></td>
 </tr>
 
</table>

					<div class="buttons"><input type="submit" name="submit" class="button" value="Update" /></div>					
					</form>';

				
echo '				</div>
				<!-- End Box -->
				
				

			</div>
			<!-- End Content -->
			<!-- Sidebar --> 
			

			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					
					<!-- End Box Head-->
					
					<div class="box-content">
                                            <img src="profile_images/';
echo $row['Image_Name'];
echo '" width="203" height="250" alt="Jellyfish"/>
                                           
						
						
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