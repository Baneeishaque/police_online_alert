<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faculty Post Notification</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
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
                        ?>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
                            <li><a href="faculty_home.php" ><span>Profile</span></a></li>
                           <!-- <li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
                            <li><a href="faculty_upload_notes.php"><span>Upload Study Materials</span></a></li>
                            <li><a href="faculty_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="faculty_upload_result.php"><span>Upload Result</span></a></li>
                            <li><a href="faculty_parent_memo.php"><span>Parent Memo</span></a></li>
                            <li><a href="chat/faculty_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="#" class="active"><span>Post Notification</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

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
					
					<?php
					
					if(isset($_POST['submit'])){
					// Action to be performed
					require('config.php');
					
			$u=$_SESSION["user_id"];
			//echo $u;
			$result=mysql_query("SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'");	
			//echo "SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'";
			$row=mysql_fetch_array($result);
					$faculty_id=$row['Faculty_Name'];
					$Dept = mysql_escape_string($_POST['Dept']);
					$Sem = mysql_escape_string($_POST['Sem']);
					$Title = mysql_escape_string($_POST['Title']);
					$Message = mysql_escape_string($_POST['Message']);
					
					mysql_query("INSERT INTO `notification`(`NotificationID`, `FacultyID`, `Dept`, `Sem`, `Title`, `Message`) VALUES (NULL,'$faculty_id','$Dept','$Sem','$Title','$Message')")or die(mysql_error());
					
					echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';		
}
				?>
					<div class="box-head">
						<h2>Faculty Post Notification :</h2>
					</div>
					<!-- End Box Head -->
					<form action="faculty_post_notification.php" method="post">
					<div class='form'>
					<p>
					<label>Department:</label>
					<select name='Dept' class="field">
								  <option value="Automobile">Automobile Engineering</option>
                                                <option value="Civil">Civil Engineering</option>
                                                
                                                <option value="Computer">Computer Engineering</option>
                                                <option value="Elactrical">Electrical Engineering</option>
                                                <option value="Electronics">Electronics Engineering</option>
                                                <option value="Mechanical">Mechanical Engineering</option>
								</select>
					</p>
					<p>
					<label>Semester:</label>
					<select name='Sem' class="field">
                                            <option value="first">S1</option>
								<option value="third">S3</option>
								<option value="fifth">S5</option>
                                                                <option value="second">S2</option>
								<option value="fourth">S4</option>
								<option value="sixth">S6</option>
								<option value="first & second">S1 & S2</option>
								<option value="third & fourth">S3 & S4</option>
								<option value="fifth & sixth">S5 & S6</option>
								</select>
					</p>
					<p>
					<label>Title:</label>
					<input type="text" name='Title' class="field size1" />
					</p>
					<p>
					<label>Message:</label>
					<textarea class="field size1" name='Message' rows="5" cols="10"></textarea>
					</p>
					</div><div class='buttons'><input type='submit' name='submit' class='button' value='Post Notification' /></div>					
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

<!-- Footer -->
<?php
require("footer.php");
?>
<!-- End Footer -->
	
</body>
</html>