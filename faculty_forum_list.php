<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Faculty Forum : List</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
        <!-- Header -->
        <div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Campuss Buddy</a></h1>
			                       <?php
session_start();
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
                           <!-- <li><a href="faculty_attendance.php"><span>Mark Attendance</span></a></li>-->
                            <li><a href="faculty_upload_notes.php"><span>Upload Study Materials</span></a></li>
                            <li><a href="#" class="active"><span>Forum</span></a></li>
                            <li><a href="faculty_upload_result.php"><span>Upload Result</span></a></li>
                            <li><a href="faculty_parent_memo.php"><span>Parent Memo</span></a></li>
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
                                 echo 'faculty_forum_answer.php?id=';
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
                                <a href="faculty_forum_question.php" class="add-button"><span>New Article</span></a>
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