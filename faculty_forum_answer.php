<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Faculty Forum : Comments</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
	 <?php
        session_start();
        if (isset($_POST['submit'])) {
            // Action to be performed

            $u = $_SESSION["user_id"];
            //echo $u;
            $id= $_SESSION["id"];;
            require('config.php');
            $result = mysql_query("SELECT Faculty_Name FROM `faculty` WHERE `Faculty_ID`='$u'");
            //print_r($result);
            $row = mysql_fetch_array($result);
            $asker = $row['Faculty_Name'];
            //echo $asker;

            $answer = mysql_escape_string($_POST['answer']);
            
            

            if(mysql_query("INSERT INTO `forumanswer`(`AnswerID`, `ID`, `ReplyMsg`, `QuestionID`) VALUES (null,'$asker','$answer','$id')"))
            {
                header("Location: faculty_forum_list.php"); /* Redirect browser */
                  exit();
             
            }
 else {
                echo '<script>

    alert("Try Again");

</script>';
 }
              
                                                         
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
                            <?php
                            require_once 'config.php';
                                    if ($_GET['id']) :
                                        $id= $_GET['id'];
                                    $_SESSION['id'] = $id;
                                                             
                                    endif;
                                    $result = mysql_query("select AnswerID,ReplyMsg,ID from ForumAnswer where QuestionID='$id'");
                       
                            $result2 = mysql_query("SELECT `Subject`, `Question` FROM `qforum` WHERE `Forum_ID`='$id'");
                             $row2 = mysql_fetch_array($result2) ;     
                                                    echo '<!-- Box Head -->
                            <div class="box-head">
                                <h2 class="left">';
                                                      echo $row2['Question'];
                                                      echo ' : ';
                                                       echo $row2['Subject'];
                                                       echo '</h2>
                                
                            </div>
                            <!-- End Box Head -->	

                            <!-- Table -->
                            <div class="table">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                       <th>Previous Comments</th>
                                       
                                    </tr>
                                      <tr>
                                       <th>Comment</th>
                                        <th>Author</th>
										
                                     </tr>';
                                   
                                     while ($row = mysql_fetch_array($result)) {


                                    echo '<tr>
                                        <td>';
                                    echo $row['ReplyMsg'];
                                    echo '</td>
                                        <td>';
                                    echo $row['ID'];
                                    echo '</td>
                                        
                                    </tr>';
                                    }
                                   

                                    echo ' </table>




                            </div>
                            <!-- Table -->

                        </div>
                        <!-- End Box -->

                        <!-- Box -->
                        <div class="box">
                            <!-- Box Head -->
                            <div class="box-head">
                                <h2>Your Comments</h2>
                            </div>
                            <!-- End Box Head -->
                            <form action="faculty_forum_answer.php" method="post">
                                <div class="form">	

                                    <textarea class="field size1" name="answer" rows="5" cols="10"></textarea>
                                    </p>
                                </div>
                                <div class="buttons">
                                    <input type="submit" name="submit" class="button" value="Post" />
                                </div>
                            </form>
                        </div>
                        <!-- End Box -->

                    </div>
                    <!-- End Content -->';
                                    ?>

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
                                <a href="faculty_forum_list.php" class="add-button"><span>List Articles</span></a>
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