<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Student Give Feedback</title>
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

//                            <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                            echo '<li><a href="#" class="active"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
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
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Student Faculty Feedback Section</h2>
						
					</div>
					<form action="student_give_feedback.php" method="post">
						<div class="form">	
								
								<p>
								<label>Select Faculty :</lable>
								<br><br>
								<select name='Faculty_ID' class="field">
                                                                    <?php
                                                                    require_once 'config.php';
                                                                    $result=mysql_query("SELECT * FROM `faculty` ");
                                                                     while ($row = mysql_fetch_array($result)) {

                                  
                                 echo '<option value="';
                                 echo $row['Faculty_Name'];;
                                 echo '">';
                                 echo $row['Faculty_Name'];;
                                 echo '</option>';
                                 
                                }
                                                                    ?>
                                                                    
								
								</select>
								</p>
								<p>
								<label>Knowledge of faculty in the subject :</lable>
								<br><br>
								<select name='Knowledge' class="field">
								<option value="poor">Poor</option>
								<option value="average">Average</option>
								<option value="good">Good</option>
								<option value="outstanding">Outstanding</option>
								</select>
								</p>
								<p>
								<label>Use of OHP and Blackboard  :</lable>
								<br><br>
								<select name='OhpUsage' class="field">
								<option value="poor">Poor</option>
								<option value="average">Average</option>
								<option value="good">Good</option>
								<option value="outstanding">Outstanding</option>
								</select>
								</p>
								<p>
								<label>Facultys behaviour and attitude   :</lable>
								<br><br>
								<select name='Behaviour' class="field">
								<option value="poor">Poor</option>
								<option value="average">Average</option>
								<option value="good">Good</option>
								<option value="outstanding">Outstanding</option>
								</select>
								</p>
								<p>
								<label>Style Of Teaching   :</lable>
								<br><br>
								<select name='TeachingStyle' class="field">
								<option value="poor">Fast</option>
								<option value="average">Medium</option>
								<option value="good">Slow</option>
								<option value="outstanding">Just Right</option>
								</select>
								</p>
								<p>
								<label>Whether The Faculty Gives Notes? </lable>
								<br><br>
								<select name='Notes' class="field">
								<option value="poor">Yes,Gives Notes</option>
								<option value="average">No,Just Dictating</option>
								<option value="good">Sometimes</option>
								</select>
								</p>
								<p>
								<label>Whether The Faculty Encourage Questioning?</lable>
								<br><br>
								<select name='DoubtClearing' class="field">
								<option value="poor">Yes</option>
								<option value="average">No</option>
								</select>
								</p>
								<p>
								<label>Wheter The Faculty Return Assignments After Correction?</lable>
								<br><br>
								<select name='Assignment' class="field">
								<option value="poor">Yes</option>
								<option value="average">No</option>
								</select>
								</p>
								<p>
								<label>Suggestions/Complaints</label>
								<textarea class="field size1" name='Message' rows="5" cols="10"></textarea>
								</p>
						</div>
						<div class="buttons">
							<input type="submit" name="submit" class="button" value="Post Feedback" />
						</div>
						</form>
				</div>
					<!-- End Box Head -->
					<?php
					if(isset($_POST['submit'])){
					// Action to be performed
					require('config.php');
					
		
					
					$Faculty_ID = mysql_escape_string($_POST['Faculty_ID']);
					$Knowledge = mysql_escape_string($_POST['Knowledge']);
					$OhpUsage = mysql_escape_string($_POST['OhpUsage']);
					$Behaviour = mysql_escape_string($_POST['Behaviour']);
					$TeachingStyle = mysql_escape_string($_POST['TeachingStyle']);
					$Notes = mysql_escape_string($_POST['Notes']);
					$DoubtClearing = mysql_escape_string($_POST['DoubtClearing']);
					$Assignment = mysql_escape_string($_POST['Assignment']);
					$Message = mysql_escape_string($_POST['Message']);
					
	
					mysql_query("INSERT INTO `feedback`(`FeedBackID`,  `Faculty_ID`, `Knowledge`, `OhpUsage`, `Behaviour`, `TeachingStyle`, `Notes`, `DoubtClearing`, `Assignment`, `Message`) VALUES (NULL,'$Faculty_ID','$Knowledge','$OhpUsage','$Behaviour','$TeachingStyle','$Notes','$DoubtClearing','$Assignment','$Message')")or die(mysql_error());
					
					echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';		
}
					?>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			
			
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