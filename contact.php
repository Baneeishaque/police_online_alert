<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    </head>
    <body>
        <!-- Header -->
        <div id="header">
            <div class="shell">
                <!-- Logo + Top Nav -->
                <div id="top">
                    <h1><a href="#">Campus Buddy</a></h1>

                </div>
                <!-- End Logo + Top Nav -->

                <!-- Main Nav -->
                <div id="navigation">
                    <ul>
                        <li><a href="index.php" ><span>Login</span></a></li>

                       
                        <li><a href="#" class="active"><span>Contact Us</span></a></li>
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
                                <h2>Contact Us :</h2>
                            </div>
                            <!-- End Box Head -->
                            <?php
                            require('config.php');
                            if (isset($_POST['submit'])) {
                                // Action to be performed
                             
                                $message = $_POST['message'];


                                $name = mysql_escape_string($_POST['name']);

                                $phone = mysql_escape_string($_POST['phone']);



                                if (mysql_query("INSERT INTO `feedbacks`( `name`, `Phone`, `message`) VALUES ('$name','$phone','$message')")) {
                                    echo '<script>

					alert("Success on Insertion");

				</script>
				';
                                     header('Refresh:1;URL=index.php');
                                } else {
                                    echo '<script>

					alert("Error on Insertion");

				</script>
				';
                                }
                            }
                            ?>
                            <form action="contact.php" method="post">
                                <div class='form'><p><label>Name :</label><input type='text' name='name' class='field size1' /></p><p><label>Phone :</label><input type='textareea' name='phone' class='field size1' /></p><p><label>Message :</label><textarea class="field size1" name='message' rows="5" cols="10"></textarea>
                                    </p></div><div class='buttons'><input type='submit' name='submit' class='button' value='Contact Us' /></div>					
                            </form>
                            <table>
                                <tr><td><a href=""><img src="contact/facebook.png"></a></td><td><a href=""><img src="contact/twitter.png"></a></td><td><a href=""><img src="contact/rssfeed.png"></a></td></tr>
                            </table>
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

        <!-- Footer -->
        <div id="footer">
            <div class="shell">
                <span class="left">&copy; 2010 - CompanyName</span>
                <span class="right">
                    Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
                </span>
            </div>
        </div>
        <!-- End Footer -->

    </body>
</html>