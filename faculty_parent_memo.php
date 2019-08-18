
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Mail to Parent</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

     <?php
                        session_start();
                         if (isset($_POST['submit'])) {

require_once 'config.php';
$u=$_POST["id"];
//echo $u;
$result=mysql_query("SELECT * FROM `student` WHERE `StudentID`='$u'");	

$row=mysql_fetch_array($result);
$em=$row['PAREMAIL'];
//echo $em;                      
                           
$headers ='X-Mailer: PHP/' . phpversion();
//echo $headers;
              
                    
                
                 $message= $_POST['body'];
                 //echo $message;
                      
 /*$message=$message.'
                    </body>
                    </html>
                    ';
               // echo $message;*/
        mail($em, "Memo Email", $message, $headers);
           echo '<script>

					alert("OK");

				</script>
				';
                        }
                        
                        
                      
                        ?>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			                       <?php

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
                            <!--<li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
                            <li><a href="faculty_upload_notes.php"><span>Upload Study Materials</span></a></li>
                            <li><a href="faculty_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="faculty_upload_result.php"><span>Upload Result</span></a></li>
                            <li><a href="#" class="active"><span>Parent Memo</span></a></li>
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
						<h2>Mail to Parent :</h2>
					</div>
					<!-- End Box Head -->
                                        <form action="faculty_parent_memo.php" method="post">
					<div class='form'>
								
								<p>
								<label>Select Student ID</label><br>
								<select name='id' class="field">
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
								<p>
								<label>Mail Body :</label><br>
								<textarea class="field size1" name='body' rows="5" cols="10"></textarea>
								</p>
								
					</div><div class='buttons'><input type='submit' name='submit' class='button' value='Send Mail' /></div>					
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