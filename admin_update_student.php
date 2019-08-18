<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Administrator : Update Student Information</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
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
                            <li><a href="#" class="active"><span>Update Student Information</span></a></li>
                            <li><a href="admin_add_staff.php"><span>Faculty Registration</span></a></li>
                            
                            
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
						<h2>Search</h2>
					</div>
					<!-- End Box Head -->
                                        <form action="admin_update_student_action.php" method="post">
					<div class='form'><p><label>Student Register No. :</label>
                                                <input type="text" name="roll" class="field size1" /></p></div>
                                            <div class='buttons'><input type="submit" name="submit" class="button" value="Search" /></div>

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