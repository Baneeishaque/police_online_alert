<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Student Note Download</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
    <?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];

$result2=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	

$row2=mysql_fetch_array($result2);

echo'     <!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			<div id="top-navigation">
				<a href="#"><strong>';
echo $row2['NAME'];
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
                            <li><a href="#" class="active"><span>Downloads</span></a></li>';
                            //<li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                            echo '<li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>



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
						<h2>Student Note Download</h2>
					</div>
					<!-- End Box Head -->
					<form action="faculty-attendance.php" method="post">
						<div class="form">	
								<table class="reference">
					<tr>
                                            <th>File Title</th>
					
					
					<th>Address</th>
                                        <th>Provider</th>
					</tr>';
                                             
      
        
    
    

$result=mysql_query("SELECT `Faculty_ID`, `FileName` FROM `deptfiles` ");	

//$row=mysql_fetch_array($result);


while ($row = mysql_fetch_array($result)) {

                                  
                                 echo '<tr>
                                        <td>';
                                 
                                 echo $row['FileName'];
                                 //echo "file";
                                 $f=$row['FileName'];
                                 echo '</td>';
                                 echo '<td>';
                                 echo '<a href="http://localhost/campus/notes/'.$f.'">';
                                  
                                 echo "http://localhost/campus/notes/$f";
                                 //echo 'address';
                                 echo '</a>';
                                 echo '</td>
                                        <td>';
                              
                              //   echo 'author';
                              echo $row['Faculty_ID'];
                                 echo '</td>
                                        
                                    </tr>';
                               }

					
                                echo '</table>
                                
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

<!-- Footer -->';
require("footer.php");

echo '<!-- End Footer -->
	
</body>
</html>';