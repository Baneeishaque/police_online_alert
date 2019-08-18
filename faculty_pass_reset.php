<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Faculty Password Update</title>
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
                            <li><a href="faculty_home.php"><span>Profile</span></a></li>
                          <!--  <li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
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

<!-- End Header -->

<?php

        require_once 'config.php';
        $u = $_SESSION["user_id"];
  if (isset($_POST['submit'])) {
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            if ($pass1 != $pass2) {
                echo '<script>

					alert("Your Passowrds Dont match");

				</script>
				';
            } else {
                $result = mysql_query("SELECT * FROM `login` WHERE `user_id`='$u' and role='faculty'");
                $row = mysql_fetch_array($result);
                //echo $row['PASSWORD'];
                
                $pass = $_POST['pass'];
                //echo $pass;
                if ($pass != $row['PASSWORD']) {
                    echo '<script>

					alert("Invalid user");

				</script>
				';
                   
                   
                }
 else {
     if(mysql_query("UPDATE `login` SET `PASSWORD`='$pass1' WHERE `user_id`='$u'"))
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
            }
        }
?>

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
						<h2>Account Password Reset</h2>
					</div>
					<!-- End Box Head -->
					<form action="faculty_pass_reset.php" method="post">
						<div class="form">	
								<p>
									<label>Current Password :</label>
									<input type="password" name="pass" class="field size1" />
								</p>
								<p>
									<label>New Password :</label>
									<input type="password" name="pass1" class="field size1" />
								</p>
								<p>
									<label>Confirm Password :</label>
									<input type="password" name="pass2" class="field size1" />
								</p>
						</div>
						<div class="buttons">
							<input type="submit" name="submit"class="button" value="update" />
						</div>
						</form>
				</div>
				
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