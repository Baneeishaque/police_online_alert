<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Administrator : Feedback Checker</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
        <!-- Header -->
        <div id="header">
            <div class="shell">
                <!-- Logo + Top Nav -->
                <div id="top">
                    <h1><a href="#">Online Police Alert</a></h1>
                    <div id="top-navigation">
                        <strong>Controller</strong>			
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
                        
                        <li><a href="admin_view_feedback.php" class="active"><span>View Complaints</span></a></li>
                        <li><a href="admin_add_student.php"><span>User Registration</span></a></li>
                        <li><a href="admin_update_student.php"><span>Update User Information</span></a></li>
                       
                        

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
                                <h2>Complaint Requests</h2>
                            </div>
                            <!-- End Box Head -->
                            <form action="admin_view_feedback_action.php" method="post">
                                <div class='form'>
                                   
                                      
                                            <?php
                                            
                                            require_once 'config.php';
                                           
                                            
                                            $result2 = mysql_query("SELECT * FROM `faculty` ");
                                            while ($row2 = mysql_fetch_array($result2)) {
                                               // echo ' <br/><p><label>Faculty Name : ';
                                               //  echo $row2['Faculty_Name'];
                                            //echo '</label>';
                                            $u=$row2['Faculty_Name'];
                                                echo ' <table class="reference">
                                                            <tr>
                                                                
                                                                <th>Unique ID</th>
                                                                <th>Description</th>
                                                                <th></th>';
                                                                /*<th>Teaching Style</th>
                                                                <th>Note Gives</th>
                                                                <th>Doubt Clearing</th>
                                                                <th>Assignment</th>
                                                                <th>Message</th>*/
                                                            echo '</tr>';
                                            $result = mysql_query("SELECT * FROM `feedback` where Faculty_ID='$u' ");
                                            while ($row = mysql_fetch_array($result)) {

                                                echo '<tr>
                                                                
                                                                <td>';
                                                 echo '12345';
                                                echo '</td>
                                                                <td>';
                                                 echo 'Sample Description';
                                                echo '</td>
                                                               <td>';
                                                 echo '<input type = "submit" class="button" value = "View" />';
                                                echo '</td>';
                                                               /* <td>';
                                                 echo $row['TeachingStyle'];
                                                echo '</td>
                                                                <td>';
                                                 echo $row['Notes'];
                                                echo '</td>
                                                                <td>';
                                                 echo $row['DoubtClearing'];
                                                echo '</td>
                                                                <td>';
                                                 echo $row['Assignment'];
                                                echo '</td>
                                                                <td>';
                                                 echo $row['Message'];
                                                echo '</td>
                                                            </tr>';*/
                                               
                                            }
                                            echo '                                                        </table>'
                                            . '<br/>'
                                                    . '-------------------------------------------------------------------------------------------------------------------------------------------------<br/>';
                                            
                                                
                                            }

                                            ?>


                                       
                                        
                                                    
                                                       
                                                           
                                                    
                                                </div></div>					
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