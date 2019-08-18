<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Faculty Upload Notes</title>
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
                        <li><a href="" class="active"><span>Upload Study Materials</span></a></li>
                        <li><a href="faculty_forum_list.php"><span>Forum</span></a></li>
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
                <br />
                <!-- Main -->
                <div id="main">
                    <div class="cl">&nbsp;</div>

                    <!-- Box -->
                    <div class="box">
                        <!-- Box Head -->
                        <div class="box-head">
                            <h2>Faculty Notes Upload</h2>
                        </div>
                        <!-- End Box Head -->
                        <?php
                       

require_once 'config.php';
$u=$_SESSION["user_id"];
$result=mysql_query("SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'");	
//echo "SELECT * FROM `faculty` WHERE `Faculty_ID`='$u'";
$row=mysql_fetch_array($result);
$u=$row['Faculty_Name'];
                        if (isset($_POST['submit'])) {
                            $uploaddir = 'notes/';
                            $uploadfile = $uploaddir . basename($_FILES['note']['name']);
                             $image_name = $_FILES['note']['name'];

                            if (!(move_uploaded_file($_FILES['note']['tmp_name'], $uploadfile))) {
                                 echo '<script>

					alert("Upload Failure");

				</script>
				';
                            }
                            else
                            {
                                if (mysql_query("INSERT INTO `deptfiles`(`File_ID`, `Faculty_ID`, `FileName`) VALUES (null,'$u','$image_name')")) {
                       echo '<script>

    alert("Success");

</script>';
                    } 
 else {
     echo '<script>

					alert("Upload Failure");

				</script>
				';
    
 }
                                 
                            }
                        }
                        ?>
                        <form enctype="multipart/form-data" action="faculty_upload_notes.php" method="post">
                            <div class="form">	
                                
                                <p>
                                    <input type="file" name="note" />
                                </p>
                            </div>
                            <div class="buttons">
                                <input type="submit" name="submit" class="button" value="Upload" />
                            </div>
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