<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Assign Faculty</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
            require_once 'config.php';
           

            

                
                $faculty = mysql_escape_string($_POST['faculty']);
                $branch = mysql_escape_string($_POST['branch']);
                
                $subject = mysql_escape_string($_POST['subject']);
                
                
               

                    if (mysql_query("INSERT INTO `classfaculties`(`Key1`, `BRANCH`, `Faculty_ID`, `SUBID`) VALUES (null,'$branch','$faculty','$subject')")) {
                        echo '<script>

					alert("Assign Success");

				</script>
				';
                    } 
 else {
     echo '<script>

					alert("Assign Failure");

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
                            <li><a href="#" class="active"><span>Assign Faculty</span></a></li>
                            
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
						<h2>Add Faculty and Subject Details :</h2>
					</div>
					<!-- End Box Head -->
                                        <form action="admin_assign_faculty.php" method="post">
					<div class='form'>
					<p>
					<label>Branch :</label>
					<select name='branch' class="field">
								<option value="Automobile">Automobile Engineering</option>
                                                <option value="Civil">Civil Engineering</option>
                                                
                                                <option value="Computer">Computer Engineering</option>
                                                <option value="Elactrical">Electrical Engineering</option>
                                                <option value="Electronics">Electronics Engineering</option>
                                                <option value="Mechanical">Mechanical Engineering</option>
                                               </select>
					</p>
					<p>
					<label>Select Faculty_ID </label>
								<select name='faculty' class="field">
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
					
					
					<label>Subject ID :</label>
					<input type="text" name='subject' class="field size1" />
					</div><div class='buttons'><input type='submit' name='submit' class='button' value='Done' /></div>					
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