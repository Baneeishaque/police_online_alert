<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Student : Update Profile Information</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
        <?php
        session_start();
        require_once 'config.php';
        $u = $_SESSION["user_id"];

        if (isset($_POST['submit'])) {
            
		
		
		$address = mysql_escape_string($_POST['address']);
                $city = mysql_escape_string($_POST['city']);
		$phone = mysql_escape_string($_POST['phone']);
		$state = mysql_escape_string($_POST['state']);
		$pin = mysql_escape_string($_POST['pin']);
                $email = mysql_escape_string($_POST['email']);
		
		     if(mysql_query("UPDATE `student` SET `ADDRESS`='$address',`CITY`='$city',`STATE`='$state',`PIN`='$pin',`EMAIL`='$email',`PHNNO`='$phone' WHERE `StudentID`='$u'"))
     {
          echo '<script>

					alert("Updation Success");

				</script>
				';
                   header('Refresh:1;URL=student_home.php');
     }
 else {
          echo '<script>

					alert("Error on updation");

				</script>
				';
     }
              
 
        }






           
            
        $result = mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");

        $row = mysql_fetch_array($result);

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
                            <li><a href="student_home.php"><span>Profile</span></a></li>
                            <li><a href="student_result.php"><span>View Result</span></a></li>
                            <li><a href="student_forum_list.php"><span>Forum</span></a></li>
                            <li><a href="chat/student_chat.php"><span>Chat Room</span></a></li>
                            <li><a href="student_downloads.php"><span>Downloads</span></a></li>';
                            //<li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                           echo ' <li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                            <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>';



        echo '<!-- Container -->
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
						<h2>Student Personal Details</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="student_edit_profile.php" method="post">
					<table class="reference">';


        echo '<tr>
  <td>NAME</td>
  <td>';
        echo $row['NAME'];
        echo '</td>
 </tr>
 <tr>
  <td>DOB</td>
  <td>';
        echo $row['DOB'];
        echo '</td>
 </tr>
 <tr>
  <td>SEX</td>
  <td>';
        echo $row['SEX'];
        echo '</td>
        </tr>
        <tr>
        <td>Branch</td>
        <td>';
        switch ($row['BRANCH'])
 {
     case "Automobile"  :   echo 'Automobile Engineering';
         break;
     case "Civil"  :   echo 'Civil Engineering';
               break;                                 
     case "Computer"  :   echo 'Computer Engineering';
         break;
     case "Elactrical"  :   echo 'Electrical Engineering';
         break;
     case "Electronics"  :   echo 'Electronics Engineering';
         break;
     case "Mechanical"  :   echo 'Mechanical Engineering';
 }
 echo '</td>
        </tr>
        <tr>
        <td>SEM</td>
        <td>';
 echo $row['SEM'].'</td>
        </tr>
        <tr>
        <td>ADDRESS</td>
        <td><input type = "text" name = "address"  value = "';
 echo $row['ADDRESS'];
echo '"></textarea></td>
        </tr>
        <tr>
        <td>City</td>
        <td><input type = "text" name = "city" value = "';
 echo $row['CITY'];
echo '"/></td>
        </tr>
        <tr>
        <td>State</td>
        <td><input type = "text" name = "state" value = "';
 echo $row['STATE'];
echo '"/></td>
        </tr>
        <tr>
        <td>PIN</td>
        <td><input type = "text" name = "pin" value = "';
 echo $row['PIN'];
echo '"/></td>
        </tr>
        </tr>
        <tr>
        <td>EMAIL</td>
        <td><input type = "text" name = "email" value = "';
 echo $row['EMAIL'];
echo '"/></td>
        </tr>
        <tr>
        <td>PHNNO</td>
        <td><input type = "text" name = "phone" value = "';
 echo $row['PHNNO'];
echo '"/></td>
        </tr>
        <tr>
        <tr>
        <td>Gurdian Email</td>
        <td>';
echo $row['PAREMAIL'].'</td>
        </tr>
        <tr>
        <td>Gurdian Phone</td>
        <td>';
echo $row['PARPHN'].'</td>
        </tr>';
       
     echo '     </table>

        <div class = "buttons"><input type = "submit" name="submit" class = "button" value = "Update" /></div>
        </form>

        </div>
        <!--End Box -->



        </div>
        <!--End Content -->



        <div class = "cl">&nbsp;
        </div>
        </div>
        <!--Main -->
        </div>
        </div>
        <!--End Container -->

        <!--Footer -->';

require("footer.php");

echo '<!--End Footer -->

        </body>
        </html>';
