<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Student Result</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <script src="jquery-2.1.1.min.js"></script>
    </head>
    <body>
           <?php
session_start();
require_once 'config.php';
$u=$_SESSION["user_id"];
//echo $u;
$result=mysql_query("SELECT * FROM `student` WHERE `studentid`='$u'");	
//echo "SELECT * FROM `student` WHERE `studentid`='$u'";
$row=mysql_fetch_array($result);

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
                        <li><a href="student_home.php" ><span>Profile</span></a></li>
                        <li><a href="#" class="active"><span>View Result</span></a></li>
                        <li><a href="student_forum_list.php"><span>Forum</span></a></li>
                        <li><a href="chat/student_chat.php"><span>Chat Room</span></a></li>
                        <li><a href="student_downloads.php"><span>Downloads</span></a></li>';
                       // <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
                        echo '<li><a href="student_give_feedback.php"><span>Give Feedback</span></a></li>
                        <li><a href="student_view_notifications.php"><span>View Notifications</span></a></li>
                    </ul>
                </div>
                <!-- End Main Nav -->
            </div>
        </div>';
?>

        <!-- End Header -->

        <!-- Container -->
        <div id="container">
            <div class="shell">

                <!-- Small Nav -->

                <!-- End Small Nav -->	
                <br />
                <!-- Main -->
                <div id="main">
                    <div class="cl">&nbsp;</div>

                    <!-- Content -->

                    <form>
                        <table>
                            <tr><td>
                                    <select name='series' id="Series">
                                        <option value="select">--Select--</option>
                                        <option value="First">First Series</option>
                                        
                                        <option value="Second">Second Series</option>
                                    </select>
                                    <td>
                                        </tr>
                                        </table>
                                        </form>

                                        <div id="content">

                                        </div>
                                        <!-- End Content -->
                                        <script>
           $(document).ready(function(){
               $('#Series').change(function(){
                   $.ajax({
                       type : 'GET',
                       url : 'student_result_return.php',
                       data : 'Series='+$('#Series').val(),
                       success : function(msg)
                       {
                           $('#content').html(msg);
                       }
                   });
               });
           });
       </script>


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