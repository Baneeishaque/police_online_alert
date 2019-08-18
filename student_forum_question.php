<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Student Forum : New Article</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
        <?php
        session_start();
        if (isset($_POST['submit'])) {
            // Action to be performed

            $u = $_SESSION["user_id"];
            //echo $u;
            require('config.php');
            $result = mysql_query("SELECT NAME FROM `student` WHERE `studentid`='$u'");
            //print_r($result);
            $row = mysql_fetch_array($result);
            $asker = $row['NAME'];
            //echo $asker;

            $subject = mysql_escape_string($_POST['subject']);
            $article = mysql_escape_string($_POST['article']);
            

            if(mysql_query("INSERT INTO `qforum`(`Forum_ID`, `Asker_ID`, `Subject`, `Question`) VALUES (null,'$asker','$subject','$article')"))
            {
                header("Location: student_forum_list.php"); /* Redirect browser */
                  exit();
             
            }
 else {
                echo '<script>

    alert("Try Again");

</script>';
 }
              
                                                         
        }
        
        ?>
            <?php

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
                        <li><a href="student_result.php"><span>View Result</span></a></li>
                        <li><a href="#" class="active"><span>Forum</span></a></li>
                        <li><a href="chat/student_chat.php"><span>Chat Room</span></a></li>
                        <li><a href="student_downloads.php"><span>Downloads</span></a></li>';

//                        <li><a href="student_atttendance_view.php"><span>View Attendance</span></a></li>
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





                <!-- Main -->
                <div id="main">
                    <div class="cl">&nbsp;</div>

                    <!-- Content -->
                    <div id="content">

                        <!-- Box -->
                        <div class="box">
                            <!-- Box Head -->
                            <div class="box-head">
                                <h2 class="left">Current Articles</h2>

                            </div>
                            <!-- End Box Head -->	

                            <!-- Table -->
                            <div class="table">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <th>Article</th>
                                        <th>Subject</th>

                                        <th>Author</th>

                                        <th ></th>
                                    </tr>
                                     <?php
                                    
                                require_once 'config.php';
                              
                                $result = mysql_query("select Forum_ID,Subject,Question,Asker_ID from QForum order by Forum_ID DESC");

                                while ($row = mysql_fetch_array($result)) {

                                  
                                 echo '<tr>
                                        <td>';
                                 echo $row['Question'];
                                 echo '</td>
                                        <td>';
                                  echo $row['Subject'];
                                 echo '</td>
                                        <td>';
                                  echo $row['Asker_ID'];
                                 echo '</td>
                                        <td><a href="';
                                 echo 'student_forum_answer.php?id=';
                                 echo $row['Forum_ID'];
                                 echo '" class="ico edit">Comment</a></td>
 
                                    </tr>';
                                }
                                ?>

                                </table>




                            </div>
                            <!-- Table -->

                        </div>
                        <!-- End Box -->

                        <!-- Box -->
                        <div class="box">
                            <!-- Box Head -->
                            <div class="box-head">
                                <h2>New Article</h2>
                            </div>
                            <!-- End Box Head -->
                            <form action="student_forum_question.php" method="post">
                                <div class="form">	
                                    <p>
                                        <label>Subject :</label>
                                        <input type="text" name="subject" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>Article :</lable>
                                            <textarea class="field size1" name='article' rows="5" cols="10"></textarea>
                                    </p>
                                </div>
                                <div class="buttons">
                                    <input type="submit" name="submit" class="button" value="Post" />
                                </div>
                            </form>
                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End Content -->

                    <!-- Sidebar -->
                    <div id="sidebar">

                        <!-- Box -->
                        <div class="box">

                            <!-- Box Head -->
                            <div class="box-head">
                                <h2>Management Pane</h2>
                            </div>
                            <!-- End Box Head-->

                            <div class="box-content">
                                <a href="student_forum_list.php" class="add-button"><span>List Articles</span></a>
                                <div class="cl">&nbsp;</div>





                            </div>
                        </div>
                        <!-- End Box -->
                    </div>
                    <!-- End Sidebar -->

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