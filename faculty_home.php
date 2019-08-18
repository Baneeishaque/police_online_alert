<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faculty Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<?php
session_start();
require('faculty_header.php');
require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result=mysql_query("SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'");	
//echo "SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'";
$row=mysql_fetch_array($result);
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
  <td>Name   </td>
  <td>';
  echo $row['Faculty_Name'];
  echo'</td>
 </tr>
 <tr>
  <td>Date of Birth  </td>
  <td>'; echo $row['DOB'];
  echo'</td>
 </tr>
 <tr>
  <td>Sex </td>
  <td>';
  echo $row['SEX']; echo'</td>
 </tr>
 <tr>
  <td>Department </td>
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
   echo'</td>
 </tr>
 <tr>
  <td>Designation</td>
  <td>'; echo $row['DESIG']; echo'</td>
 </tr>
  <tr>
  <td>Qualification</td>
  <td>'; echo $row['QUALIFICATION']; echo'</td>
 </tr>
  <tr>
  <td>Address</td>
  <td>'; echo $row['ADDRESS']; echo'</td>
 </tr>
  <tr>
  <td>City </td>
  <td>'; echo $row['CITY']; echo'</td>
 </tr>
   <tr>
  <td>State </td>
  <td>'; echo $row['STATE']; echo'</td>
 </tr>
    <tr>
  <td>PinCode</td>
  <td>'; echo $row['PIN']; echo'</td>
 </tr>
  <tr>
  <td>E­mail</td>
  <td>'; echo $row['EMAIL']; echo'</td>
 </tr>
 <tr>
  <td>Mobile</td>
  <td>'; echo $row['PHNNO']; echo'</td>
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
                                      
                                           
						<a href="faculty_edit_profile.php" class="add-button"><span>Update Profile</span></a>
						<div class="cl">&nbsp;</div>
                                                <br/>
						<a href="faculty_pass_reset.php" class="add-button"><span>Change Password</span></a>
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

<!-- Footer -->
';

require("footer.php");

echo'
<!-- End Footer -->
	
</body>
</html>
';