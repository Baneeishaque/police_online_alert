
<?php

session_start();
if ($_GET['Series']) :

    if ($_GET['Series'] == 'select') {
        echo '<br>
			<table class="reference">
			<th>Please Select an Option</th>
			</table>';
    } else {
        if ($_GET['Series'] == 'First') {
            require_once 'config.php';
            $u = $_SESSION["user_id"];

            $result = mysql_query("select SUBID,TotalScore,Series1_Mark from EXAM where StudentID='$u'");

            $row = mysql_fetch_array($result);
            $a = '<table class="reference">
			
 <tr>
  <th>Subject</th>
  <th>Maximum CGPA</th>
  <th>Scored CGPA</th>
 </tr>
 <tr>
  <td>';
            $a.= $row['SUBID'];
            $a.= '</td>
  <td>';
            $a.= $row['TotalScore'];
            $a.= '</td>
  <td>';
            $a.= $row['Series1_Mark'];
            $a.= '</td>
 </tr>
</table>';
            echo $a;
        } else {
            if ($_GET['Series'] == 'Second') {
                require_once 'config.php';
                $u = $_SESSION["user_id"];

                $result = mysql_query("select SUBID,TotalScore,Series2_Mark from EXAM where StudentID='$u'");

                $row = mysql_fetch_array($result);
                $a = '<table class="reference">
			<tr>
			<th>Subject</th>
			 <th>Maximum CGPA</th>
  <th>Scored CGPA</th>
			</tr>
			<tr>
			<td>';
                $a.= $row['SUBID'];
                $a.= '</td>
			<td>';
                $a.= $row['TotalScore'];
                $a.= '</td>
			<td>';
                $a.= $row['Series2_Mark'];
                $a.= '</td>
			</tr>
			</table>';
                echo $a;
            }
        }
    }
    

    endif;
    
	