
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Publish Results</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
					// Action to be performed
					require('config.php');
		
					
					$student = mysql_escape_string($_POST['student']);
					$m1 = mysql_escape_string($_POST['m1']);
					$m2 = mysql_escape_string($_POST['m2']);
					
                                        //echo "INSERT INTO `exam`(`SUBID`, `StudentID`, `Series1_Mark`, `Series2_Mark`, `TotalScore`) VALUES (null,'$student','$m1','$m2','100')";
					
					if(mysql_query("UPDATE `exam` SET `Series1_Mark`='$m1',`Series2_Mark`='$m2' WHERE `StudentID`='$student'"))
                                        {
                                            echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';		

                                        }
 else {
      echo '<script>

					alert("Your Data Was Uploaded");

				</script>
				';		
 }
                                            
                                            
    }
					
					
				?>
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
                          <!--  <li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
                            <li><a href="faculty_upload_notes.php"><span>Upload Study Materials</span></a></li>
                            <li><a href="faculty_forum_list.php"><span>Forum</span></a></li>
			    <li><a href="#" class="active"><span>Upload Result</span></a></li>
                            <li><a href="faculty_parent_memo.php"><span>Parent Memo</span></a></li>
                            <li><a href="chat/faculty_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="faculty_post_notification.php"><span>Post Notification</span></a></li>
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
					<div class="box-head">
						<h2>Student CGPA Updation</h2>
					</div>
					<!-- End Box Head -->
                                        <form action="faculty_upload_result.php" method="post">
					<div class='form'>
								
								
								
								<p>
								<label>Select Student :</label><br>
								<select name='student' class="field">
								 <?php
                                                                    require_once 'config.php';
                                                                    $result=mysql_query("SELECT * FROM `student` ");
                                                                     while ($row = mysql_fetch_array($result)) {

                                  
                                 echo '<option value="';
                                 echo $row['StudentID'];
                                 echo '">';
                                 echo $row['NAME'];
                                 echo '</option>';
                                 
                                }
                                                                    ?>
								</select>
								</p>
								<p><h1><font color="black"><u>Enter CGPA Details</u></font></h1><p><br>
								<p>
								<label>Series 1 CGPA :</label>
								<input type="text" name='m1'  class="field size1" />
								<label>Series 2 CGPA :</label>
								<input type="text" name='m2'  class="field size1" />
								</p>
								
					</div><div class='buttons'><input type='submit' name='submit' class='button' value='Update Marks' /></div>					
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
<div id="footer">
	<div class="shell">
		<span class="left">&copy; 2010 - CompanyName</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>