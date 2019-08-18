<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Administrator : Student Registration</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>

        <?php
        if (isset($_POST['submit'])) {
            require_once 'config.php';
            $email = $_POST['email1'];
            $email2 = $_POST['email2'];

            if ($email == $email2) {

                $rollno = mysql_escape_string($_POST['rollno']);
                $name = mysql_escape_string($_POST['name']);
                $date = mysql_escape_string($_POST['date']);
                $gender = mysql_escape_string($_POST['sex']);
                $branch = mysql_escape_string($_POST['branch']);
                $semester = mysql_escape_string($_POST['semester']);
                $address = mysql_escape_string($_POST['address']);
                $state = mysql_escape_string($_POST['state']);
                $city = mysql_escape_string($_POST['city']);
                $pin = mysql_escape_string($_POST['pin']);
                $phone = mysql_escape_string($_POST['phone']);
                $paremail = mysql_escape_string($_POST['paremail']);
                $parphone = mysql_escape_string($_POST['parphone']);
                $statues = mysql_escape_string($_POST['status']);
                $image_name = $_FILES['image']['name'];
               

                $uploaddir = 'profile_images/';
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);

                if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
                    echo '<script>

					alert("Error on updation");

				</script>
				';
                } else {
                    if (mysql_query("INSERT INTO `student`(`StudentID`, `NAME`, `DOB`, `SEX`, `BRANCH`, `SEM`, `ADDRESS`, `CITY`, `STATE`, `PIN`, `EMAIL`, `PHNNO`, `PAREMAIL`, `PARPHN`, `RollNo`, `STATUS`, `Image_Name`) VALUES "
                                    . "(null,'$name','$date','$gender','$branch','$semester','$address','$state','$city','$pin','$email','$phone','$paremail','$parphone','$rollno','Active','$image_name')")) {
                        $result = mysql_query("SELECT * FROM `student` WHERE `RollNo`='$rollno'");

                        $row = mysql_fetch_array($result);
                        $u = $row['StudentID'];
                        if (mysql_query("INSERT INTO `login`(`ID`, `USERNAME`, `PASSWORD`, `Role`, `user_id`) VALUES (null,'$rollno','$date','student','$u')")) {
                            if(mysql_query("INSERT INTO `exam`( `StudentID`, `Series1_Mark`, `Series2_Mark`, `TotalScore`) VALUES ('$u','','','100')"))
                            {
                                echo '<script>

					alert("Insertion Success");

				</script>
				';
                            }
 else {
    echo '<script>

					alert("Error on Insertion3");

				</script>
				'; 
 }
                        } else {
                            echo '<script>

					alert("Error on Insertion");

				</script>
				';
                        }
                    } else {
                        echo '<script>

					alert("Error on Insertion");

				</script>
				';
                    }
                }
            } else {

                echo '<script>

					alert("Unmatched Email Entries");

				</script>
				';
            }
        }
            ?>

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
                            <li><a href="#" class="active"><span>Student Registration</span></a></li>
                            <li><a href="admin_update_student.php"><span>Update Student Information</span></a></li>
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
                    <br />
                    <!-- Main -->
                    <div id="main">
                        <div class="cl">&nbsp;</div>

                        <!-- Box -->
                        <div class="box">
                            <!-- Box Head -->
                            <div class="box-head">
                                <h2>Add New Student Account</h2>
                            </div>
                            <!-- End Box Head -->

                            <form enctype="multipart/form-data" action="admin_add_student.php" method="post">
                                <div class="form">
                                    <p>
                                        <label>Register No. :</label>
                                        <input type="text" name="rollno" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>Name :</label>
                                        <input type="text" name="name" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>Date of Birth :</label>
                                        <input type="text" name="date" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>Sex :</lable>
                                            <select name="sex" class="field">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                    </p>
                                    <p>
                                        <label>Branch :</lable>
                                            <select name='branch' class="field">
                                                <option value="Automobile">Automobile Engineering</option>
                                                <option value="Civil">Civil Engineering</option>
                                                
                                                <option value="Computer">Computer Engineering</option>
                                                <option value="Elactrical">Electrical Engineering</option>
                                                <option value="Electronics">Electronics Engineering</option>
                                                <option value="Mechanical">Mechanical Engineering</option>
                                                
                                            </select>
                                    </p>
                                    <p>
                                        <label>Semester :</lable>
                                            <select name='semester' class="field">
                                                <option value="first">First Semester</option>
                                                <option value="second">Second Semester</option>
                                                <option value="third">Third Semester</option>
                                                <option value="forth">Fourth Semester</option>
                                                <option value="fifth">Fifth Semester</option>
                                                <option value="sixth">Sixth Semester</option>
                                            </select>
                                    </p>
                                    <p>
                                        <label>Address :</lable>
                                            <textarea class="field size1" name='address' rows="5" cols="10"></textarea>
                                    </p>
                                    <p>
                                        <label>City :</label>
                                        <input type="text" name="city" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>State :</label>
                                        <input type="text" name="state" class="field size1" />
                                    </p>	
                                    <p>
                                        <label>Pin :</label>
                                        <input type="text" name="pin" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Email :</label>
                                        <input type="text" name="email1" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Confirm Email :</label>
                                        <input type="text" name="email2" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Phone :</label>
                                        <input type="text" name="phone" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Parent Mail :</label>
                                        <input type="text" name="paremail" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Parent Phone :</label>
                                        <input type="text" name="parphone" class="field size1" />
                                    </p>
                                    <p>
                                        <label>Status :</lable>
                                            <select name='status' class="field">
                                                <option value="Male">Active</option>
                                                <option value="Female">Offline</option>
                                            </select>
                                    </p>
                                    <p>
                                        <label>Photograph :</label>
                                        <input type="file" name="image" />
                                    </p>
                                </div>
                                <!-- End Form -->

                                <!-- Form Buttons -->
                                <div class="buttons">
                                    <input type="submit" name="submit" class="button" value="Submit" />
                                </div>
                                <!-- End Form Buttons -->
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