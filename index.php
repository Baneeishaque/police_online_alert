<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Campus Buddy : Login Please...</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Online Police Alert</a></h1>
			
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			
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
						<h2>Login Please...</h2>
					</div>
					<!-- End Box Head -->
					<?php 
						require_once 'config.php';
						if(isset($_POST['submit'])){
						$uname = mysql_escape_string($_POST['uname']);
						$pass = mysql_escape_string($_POST['pass']);
						$result=mysql_query("SELECT `user_id`,`USERNAME`, `PASSWORD`, `Role` FROM `login` WHERE `USERNAME`='$uname' and `PASSWORD`='$pass'");
						$row=mysql_fetch_array($result);
						$a=$row['USERNAME'];
						if($a==null)
						{
							
                                                    echo '<div class="msg msg-error">
							<p><strong>There is no person like that</strong></p>
                                                        </div>
							<form action="index.php" method="post">
                                                            <div class="form"><p>
                                                            <label>Username :</label><input type="text" name="uname" class="field size1" /></p>
                                                            <p><label>Password :</label><input type="password" name="pass" class="field size1" /></p>
                                                            </div><div class="buttons"><input type="submit" name="submit" class="button" value="Login" />
                                                            </div>					</form>';
							
						}else{
                                                        $a=$row['Role'];
                                                        if($a=='student')
                                                        {
                                                             session_start();
                                                            $_SESSION["user_id"] = $row['user_id'];
                                                            header("Location: student_home.php"); /* Redirect browser */
                                                            exit();
                                                        }
                                                        else {
                                                            if($a=='faculty')
                                                            {
                                                                session_start();
                                                                //echo $row['user_id'];
                                                             $_SESSION["user_id"] = $row['user_id'];
                                                                header("Location: faculty_home.php"); /* Redirect browser */
                                                                exit();
                                                            }
                                                            else {
                                                            if($a=='admin')
                                                            {
                                                                session_start();
                                                             $_SESSION["user_id"] = $row['user_id'];
                                                                header("Location: admin_view_feedback.php"); /* Redirect browser */
                                                                exit();
                                                            }
                                                            else {
                                                             echo '<div class="msg msg-error">
							<p><strong>Try Again</strong></p>
                                                        </div>
							<form action="index.php" method="post">
                                                            <div class="form"><p>
                                                            <label>Username :</label><input type="text" name="uname" class="field size1" /></p>
                                                            <p><label>Password :</label><input type="password" name="pass" class="field size1" /></p>
                                                            </div><div class="buttons"><input type="submit" name="submit" class="button" value="Login" />
                                                            </div>					</form>';
							
                                                        }
                                                        }
                                                        }
                                                       
                                                       
							

						}
						}
						else{	
						?>
							<form action="index.php" method="post">
							<?php
						echo"<div class='form'>";
								echo'<p>';
									echo"<label>Username :</label>";
									echo"<input type='text' name='uname' class='field size1' />";
								echo"</p>";
								echo"<p>";
									echo"<label>Password :</label>";
									echo"<input type='password' name='pass' class='field size1' />";
								echo"</p>";
						echo"</div>";
						echo"<div class='buttons'>";
							echo"<input type='submit' name='submit' class='button' value='Login' />";
						echo"</div>";
						}
						?>
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


	
</body>
</html>