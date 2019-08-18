<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Campus Buddy - Admin Panel</title>
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
                            <li><a href="admin_update_student.php"><span>Update Student Information</span></a></li>
                            <li><a href="#" class="active"><span>Faculty Registration</span></a></li>
                            
                            
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<!-- End Header -->
								<!-- Address Limit Counter Script-->
								<script>
								function textCounter( field, countfield, maxlimit ) {
								if ( field.value.length > maxlimit ) {
								field.value = field.value.substring( 0, maxlimit );
								field.blur();
								field.focus();
								return false;
								} else {
								countfield.value = maxlimit - field.value.length;
								}
								}
								</script>
								<!-- Address Limit Counter Script-->
								
								<!-- Phone Limit Counter Script-->
								<script>
								function phoneCounter( field, countfield, maxlimit ) {
								if ( field.value.length > maxlimit ) {
								field.value = field.value.substring( 0, maxlimit );
								field.blur();
								field.focus();
								return false;
								} else {
								countfield.value = maxlimit - field.value.length;
								}
								}
								</script>
								<!-- Phone Limit Counter Script-->
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
						<h2>Add New Faculty Account</h2>
					</div>
					<!-- End Box Head -->
					<?php
					require('config.php');
				if(isset($_POST['submit'])){
	// Action to be performed
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	
	if($email1 == $email2){
		if($pass1 == $pass2){
		$name = mysql_escape_string($_POST['name']);
		$date = mysql_escape_string($_POST['date']);
		$depart = mysql_escape_string($_POST['depart']);
		$gender = mysql_escape_string($_POST['sex']);
		$desig = mysql_escape_string($_POST['desig']);
		$city = mysql_escape_string($_POST['city']);
		$address = mysql_escape_string($_POST['address']);
		$phone = mysql_escape_string($_POST['phone']);
		$state = mysql_escape_string($_POST['state']);
		$pin = mysql_escape_string($_POST['pin']);
		$status = mysql_escape_string($_POST['status']);
		
		$uname = mysql_escape_string($_POST['uname']);
		$qualifi = mysql_escape_string($_POST['qualifi']);
		$email1 = mysql_escape_string($email1);
		$email2 = mysql_escape_string($email2);
		$pass1 = mysql_escape_string($pass1);
		
                $image_name = $_FILES['image']['name'];
               

                $uploaddir = 'profile_images/';
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);

                if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
                    echo '<script>

					alert("Error on updation");

				</script>
				';
                } else {
                    //echo "INSERT INTO `faculty`(`Faculty_ID`, `Faculty_Name`, `DOB`, `DEPTID`, `DESIG`, `QUALIFICATION`, `SEX`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `STATUS`, `Image_Name`) VALUES (null,'$name','$date','$depart','$desig','$qualifi','$gender','$address','$city','$state','$pin','$email1','$phone','$status','$image_name')";
                    if(mysql_query("INSERT INTO `faculty`(`Faculty_ID`, `Faculty_Name`, `DOB`, `DEPTID`, `DESIG`, `QUALIFICATION`, `SEX`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `STATUS`, `Image_Name`) VALUES (null,'$name','$date','$depart','$desig','$qualifi','$gender','$address','$city','$state','$pin','$email1','$phone','$status','$image_name')"))
                    {
                        $result = mysql_query("SELECT * FROM `faculty` WHERE `Faculty_Name`='$name'");

                        $row = mysql_fetch_array($result);
                        $u = $row['Faculty_ID'];
                        if(mysql_query("INSERT INTO `login`(`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES (null,'$uname','$pass1','faculty','$u')"))
                        {
                            echo '<script>

					alert("Success on Insertion");

				</script>
				';
                        }
                        else {
                        echo '<script>

					alert("Error on Insertion");

				</script>
				';
                    }
                        
                        
                    }
                    else {
                        echo '<script>

					alert("Error on Insertion");

				</script>
				';
                    }
                }
		
		
		}else{
			  echo '<script>

					alert("Passwords mismatch");

				</script>
				';
		}
		
	}else{
		echo '<script>

					alert("Emails mismatch");

				</script>
				';
	}	
}
?>
					<form enctype="multipart/form-data" action="admin_add_staff.php" method="post">
						<!-- Form -->
						<div class="form">
								<p>
									<label>Name :</label>
									<input type="text" name='name' class="field size1" />
								</p>	
								<p>
									<label>Date Of Birth :</label>
									<input type="text" name='date'  class="field size1" />
								</p>
								<p>
								<label>Sex :</lable>
								<select name='sex' class="field">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								</select>
								</p>
								<p>
								<label>Department :</lable>
								<select name='depart' class="field">
								<option value="Automobile">Automobile Engineering</option>
                                                <option value="Civil">Civil Engineering</option>
                                                
                                                <option value="Computer">Computer Engineering</option>
                                                <option value="Elactrical">Electrical Engineering</option>
                                                <option value="Electronics">Electronics Engineering</option>
                                                <option value="Mechanical">Mechanical Engineering</option>
                                               
								</select>
								</p>
								<p>
								<label>Qualification :</lable>
								<select name='qualifi' class="field">
								<option value="Diploma">Diploma</option>
								<option value="B-Tech">B-Tech</option>
								<option value="M-Tech">M-Tech</option>
								</select>
								</p>
								<p>
								<label>Address :</lable>
								<textarea onblur="textCounter(this,this.form.counter,200);" onkeyup="textCounter(this,this.form.counter,200);"  class="field size1" name='address' rows="5" cols="10"></textarea>
								<input onblur="textCounter(this.form.recipients,this,200);" disabled  onfocus="this.blur();" tabindex="999" maxlength="5" size="3" value="200" name="counter">
								</p>
								<p>
									<label>City :</label>
									<input type="text" name='city' class="field size1" />
								</p>
								<p>
									<label>State :</label>
									<input type="text" name='state' class="field size1" />
								</p>
								<p>
									<label>PIN :</label>
									<input type="text" name='pin' class="field size1" />
								</p>
								<p>
									<label>Email :</label>
									<input type="text" name='email1' class="field size1" />
								</p>
								<p>
									<label>Confirm Email :</label>
									<input type="text" name='email2' class="field size1" />
								</p>
								<p>
									<label>Phone :</label>
									<input onblur="phoneCounter(this,this.form.counter,12);" onkeyup="phoneCounter(this,this.form.ncounter,12); "type="text" value='91' name='phone' class="field size1" />
									<input onblur="phoneCounter(this.form.recipients,this,12);" disabled  onfocus="this.blur();" tabindex="999" maxlength="5" size="3" value="12" name="ncounter">
								</p>
								<p>
								<label>Designation :</label>
								<select name='desig' class="field">
								<option value="Lecturer">Lecturer</option>
								<option value="Lab - Assistance">Lab - Assistance</option>
								</select>
								</p>
								<p>
								<label>Status :</label>
								<select name='status' class="field">
								<option value="Active">Active</option>
								<option value="Non-Active">Non - Active</option>
								</select>
								</p>
								<p>
									<label>Username :</label>
									<input type="text" name='uname' class="field size1" />
								</p>
								<p>
									<label>Password :</label>
									<input type="password" name='pass1' class="field size1" />
								</p>
								<p>
									<label>Confirm Password :</label>
									<input type="password" name='pass2' class="field size1" />
								</p>
                                                <p>
                                        <label>Photograph :</label>
                                        <input type="file" name="image" />
                                    </p>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" name='submit' class="button" value="Register" />
						</div>
						<!-- End Form Buttons -->
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