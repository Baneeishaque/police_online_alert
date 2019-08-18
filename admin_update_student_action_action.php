<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Administrator : Update Student Information</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>

        <?php
        require_once 'config.php';
        //print_r($_FILES);
        
        $u = $_GET['id'];
        
        $name = mysql_escape_string($_POST['name']);
        $email = mysql_escape_string($_POST['email']);
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
        $status = mysql_escape_string($_POST['status']);
        $image_name = $_FILES['image']['name'];

        $uploaddir = 'profile_images/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);


        //echo $_FILES['image']['error'];
        if($_FILES['image']['error']==4)
        {
            //echo 'no image';
          
            if (mysql_query("UPDATE `student` SET `NAME`='$name',`DOB`='$date',`SEX`='$gender',`BRANCH`='$branch',`SEM`='$semester',`ADDRESS`='$address',`CITY`='$city',`STATE`='$state',`PIN`='$pin',`EMAIL`='$email',`PHNNO`='$phone',`PAREMAIL`='$paremail',`PARPHN`='$parphone',`STATUS`='$status' WHERE `RollNo`='$u'")) {
                echo '<script>

					alert("Updation Success");

				</script>
				';
                header('Refresh:1;URL=admin_view_feedback.php');
            } else {
                echo '<script>

					alert("Error on updation");

				</script>
				';
            }
        
        }
        else {
              // echo 'ok';
             if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
            echo '<script>

					alert("Error on updation");

				</script>
				';
        } else {
            if (mysql_query("UPDATE `student` SET `NAME`='$name',`DOB`='$date',`SEX`='$gender',`BRANCH`='$branch',`SEM`='$semester',`ADDRESS`='$address',`CITY`='$city',`STATE`='$state',`PIN`='$pin',`EMAIL`='$email',`PHNNO`='$phone',`PAREMAIL`='$paremail',`PARPHN`='$parphone',`STATUS`='$status',`Image_Name`='$image_name' WHERE `RollNo`='$u'")) {
                echo '<script>

					alert("Updation Success");

				</script>
				';
                header('Refresh:1;URL=admin_view_feedback.php');
            } else {
                echo '<script>

					alert("Error on updation");

				</script>
				';
            }
        }
        }
       
        ?>




    </body>
</html>