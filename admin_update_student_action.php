<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Administrator : Update Student Information</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>


        <!-- Header -->
        <div id="header">
            <div class="shell">
                <!-- Logo + Top Nav -->
                <div id="top">
                    <h1><a href="#">Campuss Buddy</a></h1>
                    <div id="top-navigation">
                        <strong>Administrator</strong>			
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

                        <li><a href="admin_view_feedback.php"><span>View Student Feedbacks</span></a></li>
                        <li><a href="admin_add_student.php"><span>Student Registration</span></a></li>
                        <li><a href="admin_update_student.php" class="active"><span>Update Student Information</span></a></li>
                        <li><a href="admin_add_staff.php"><span>Faculty Registration</span></a></li>
                        

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
                        <?php
                        error_reporting(0);
                        require_once 'config.php';

                        $u = $_POST['roll'];

                        $result = mysql_query("SELECT * FROM `student` WHERE `RollNo`='$u'");
                        $row = mysql_fetch_array($result);

                        if ($row == null) {


                            echo '<!-- Box -->
				<div class="box">
					
					
                                       <table class="reference">



                            <th>Unknown Register Number...</th>
                           

 
</table>


                                         
				
				</div>
				<!-- End Box -->
     
 
				
				
				
                           

			</div>
			<!-- End Content -->';
                        } else {

                            echo '<!--Box -->
                            <div class = "box">
                            <!--Box Head -->
                            <div class = "box-head">
                            <h2>Student Personal Details</h2>
                            </div>
                            <!--End Box Head -->

                            <form enctype = "multipart/form-data" action = "admin_update_student_action_action.php?id=' . $u . '" method = "post">
                            <table class = "reference">


                            <tr>
                            <td>NAME</td>
                            <td>';

                            echo '<input type = "text" name = "name" value = "';
                            echo $row['NAME'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>DOB</td>
                            <td>';

                            echo '<input type = "text" name = "date" value = "';
                            echo $row['DOB'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>SEX</td>
                            <td>';

                            echo '
                            <select name = "sex" class = "field">';
                            if ($row['SEX'] == 'Male') {
                                echo ' <option value = "Male">Male</option>
                            <option value = "Female">Female</option>';
                            } else {
                                echo '
                            <option value = "Female">Female</option>
                            <option value = "Male">Male</option>';
                            }

                            echo ' </select>';



                            echo '</td>
                            </tr>
                            <tr>
                            <td>Branch</td>
                            <td>';

                            echo ' <select name = "branch" class = "field">';
                            switch ($row['BRANCH']) {
                                case 'Computer' : echo '<option value = "Computer">Computer Engineering</option>
                            <option value = "Civil">Civil Engineering</option>
                            <option value = "Automobile">Auto-mobile Engineering</option>
                            <option value = "Mechanical">Mechanical Engineering</option>';
                                    break;
                                case 'Civil' : echo '
                            <option value = "Civil">Civil Engineering</option>
                            <option value = "Computer">Computer Engineering</option>

                            <option value = "Automobile">Auto-mobile Engineering</option>
                            <option value = "Mechanical">Mechanical Engineering</option>';
                                    break;
                                case 'Automobile' : echo '
                            <option value = "Automobile">Auto-mobile Engineering</option>
                            <option value = "Computer">Computer Engineering</option>
                            <option value = "Civil">Civil Engineering</option>

                            <option value = "Mechanical">Mechanical Engineering</option>';
                                    break;
                                case 'Mechanical' : echo '
                            <option value = "Mechanical">Mechanical Engineering</option>
                            <option value = "Computer">Computer Engineering</option>
                            <option value = "Civil">Civil Engineering</option>
                            <option value = "Automobile">Auto-mobile Engineering</option>
                            ';
                            }


                            echo ' </select>';


                            echo '</td>
                            </tr>
                            <tr>
                            <td>SEM</td>
                            <td>';

                            echo ' <select name = "semester" class = "field">';
                            switch ($row['SEM']) {
                                case 'first' : echo ' <option value = "first">First Semester</option>
                            <option value = "second">Second Semester</option>
                            <option value = "third">Third Semester</option>
                             <option value="forth">Fourth Semester</option>
                                                <option value="fifth">Fifth Semester</option>
                                                <option value="sixth">Sixth Semester</option>';
                                    break;
                                case 'second' : echo '
                            <option value = "second">Second Semester</option>
                            <option value = "first">First Semester</option>

                            <option value = "third">Third Semester</option>
                             <option value="forth">Fourth Semester</option>
                                                <option value="fifth">Fifth Semester</option>
                                                <option value="sixth">Sixth Semester</option>';
                                    break;
                                case 'third' : echo '
                            <option value = "third">Third Semester</option>
                            <option value = "first">First Semester</option>
                            <option value = "second">Second Semester</option> 
                            <option value="forth">Fourth Semester</option>
                                                <option value="fifth">Fifth Semester</option>
                                                <option value="sixth">Sixth Semester</option>
                            ';
                                    case 'forth' : echo '
                            <option value="forth">Fourth Semester</option>
                          
                            <option value = "first">First Semester</option>
                            <option value = "second">Second Semester</option> 
                              <option value = "third">Third Semester</option>
                                                <option value="fifth">Fifth Semester</option>
                                                <option value="sixth">Sixth Semester</option>
                            ';
                                        
                                        case 'fifth' : echo '
                            
                           <option value="fifth">Fifth Semester</option>
                            <option value = "first">First Semester</option>
                            <option value = "second">Second Semester</option> 
                              <option value = "third">Third Semester</option>
                              <option value="forth">Fourth Semester</option>
                                               
                                                <option value="sixth">Sixth Semester</option>
                            ';
                                            
                                            case 'sixth' : echo '
                            
                           <option value="sixth">Sixth Semester</option>
                            <option value = "first">First Semester</option>
                            <option value = "second">Second Semester</option> 
                              <option value = "third">Third Semester</option>
                              <option value="forth">Fourth Semester</option>
                                      <option value="fifth">Fifth Semester</option>         
                                                
                            ';
                               
                                    break;
                            }


                            echo ' </select>';


                            echo '</td>
                            </tr>
                            <tr>
                            <td>ADDRESS</td>
                            <td>';

                            echo '<input type = "text" name = "address" value = "';
                            echo $row['ADDRESS'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>City</td>
                            <td>';

                            echo '<input type = "text" name = "city" value = "';
                            echo $row['CITY'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>State</td>
                            <td>';

                            echo '<input type = "text" name = "state" value = "';
                            echo $row['STATE'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>PIN</td>
                            <td>';

                            echo '<input type = "text" name = "pin" value = "';
                            echo $row['PIN'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            </tr>
                            <tr>
                            <td>EMAIL</td>
                            <td>';

                            echo '<input type = "text" name = "email" value = "';
                            echo $row['EMAIL'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>Phone No.</td>
                            <td>';

                            echo '<input type = "text" name = "phone" value = "';
                            echo $row['PHNNO'];
                            echo '"/>';

                            echo '</td>

                            <tr>
                            <td>Guardian E-mail </td>
                            <td>';

                            echo '<input type = "text" name = "paremail" value = "';
                            echo $row['PAREMAIL'];
                            echo '"/>';

                            echo '</td>
                            </tr>
                            <tr>
                            <td>Guardian Phone</td>
                            <td>';

                            echo '<input type = "text" name = "parphone" value = "';
                            echo $row['PARPHN'];
                            echo '"/>';
                            echo '</td>
                            </tr>
                            <tr>
                            <td>STATUS</td>
                            <td><select name = "status" class = "field">';
                            if ($row['STATUS'] == 'Active') {
                                echo '<option value = "Active">Active</option>
                            <option value = "Offline">Offline</option>';
                            } else {
                                echo '
                            <option value = "Offline">Offline</option>
                            <option value = "Active">Active</option>';
                            }



                            echo' </select>';
                            echo '</td>
                            </tr>
                            <tr>
                            <td>Photograph</td>
                            <td> <input type = "file" name = "image" />
                            </td>
                            </tr>
                            </table>


                            <div class = "buttons"><input type = "submit" class = "button" value = "Update" /></div>
                            </form>

                            </div>
                            <!--End Box -->







                            </div>
                            <!--End Content -->
                            <!--Sidebar -->


                            <div id = "sidebar">

                            <!--Box -->
                            <div class = "box">

                            <!--Box Head -->

                            <!--End Box Head-->

                            <div class = "box-content">
                            <img src = "profile_images/';
                            echo $row['Image_Name'];
                            echo '" width = "203" height = "250" alt = "Jellyfish"/>



                            </div>
                            </div>
                            <!--End Box -->
                            </div>
                            <!--End Sidebar -->';
                        }
                        ?>


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