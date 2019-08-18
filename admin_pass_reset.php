<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Administrator : Password Updation</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			<div id="top-navigation">
                           <strong>Administrator</strong>			
				<span>|</span>
				
                              
                                <a href="admin_pass_reset.php">Change Credentials</a>
				<span>|</span>
                                <a href="index.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
                            
                            <li><a href="admin_view_feedback.php"><span>View Student Feedbacks</span></a></li>
                            <li><a href="admin_add_student.php"><span>Student Registration</span></a></li>
                            <li><a href="admin_update_student.php"><span>Update Student Information</span></a></li>
                            <li><a href="admin_add_staff.php"><span>Faculty Registration</span></a></li>
                            
                            
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

    <?php

        require_once 'config.php';
   
  if (isset($_POST['submit'])) {
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];
            if ($pass1 != $pass2) {
                echo '<script>

					alert("Your Passowrds Dont match");

				</script>
				';
            } else {
                $result = mysql_query("SELECT * FROM `login` WHERE `user_id`='0' and role='admin'");
                $row = mysql_fetch_array($result);
                
                
                $pass = $_POST['pass'];
           
                if ($pass != $row['PASSWORD']) {
                    echo '<script>

					alert("Invalid user information");

				</script>
				';
                 
                }
 else {
     if(mysql_query("UPDATE `login` SET `PASSWORD`='$pass1' WHERE `user_id`='0'"))
     {
          echo '<script>

					alert("Updation Success");

				</script>
				';
                   header('Refresh:1;URL=admin_view_feedback.php');
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
						<h2>Password Updation</h2>
					</div>
					<!-- End Box Head -->
					<form action="admin_pass_reset.php" method="post">
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
							<input type="submit" name="submit" class="button" value="Update" />
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