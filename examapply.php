 <p>&nbsp;</p>
  <p>&nbsp;</p>
<div id="student">

<table width="328" border="0" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="25"><font color="#FF3300">S/no</font></td>
      
      <td width="85"><font color="#FF3300">Student Name</font></td>
      <td width="105"><font color="#FF3300">Register Number</font></td>
      <td width="85">&nbsp;</td>
    </tr>
    <?php
	session_start();
	$lid=$_SESSION['lid'];
	include("connection.php");
  	$i=1;
	$id=$_GET['id'];

$res=mysql_query("SELECT students.* FROM students,SUBJECT,exam WHERE exam.sid=subject.sid AND subject.cid=students.course AND `subject`.`sem`=`students`.`sem` AND exam.eid='$id' AND `students`.`colid`='$lid' AND `students`.`lid` NOT IN(SELECT `sid` FROM `examapplication` WHERE `eid`='$id')");

while($res1=mysql_fetch_array($res))
		    
	  {
?>
    <tr>
      <td><font color="#000000"><?php echo $i++ ?></font></td>
      <td><font color="#000000"><?php echo $res1['sname'] ?></font>
      </td>
      <td><font color="#000000"><?php echo $res1['regno'] ?></font></td>
      <td><input type="checkbox" name="sid[]" id="check" value="<?php echo $res1['lid'] ?>" />
      <label for="check"></label></td>
    </tr>
     <?php 
	  }
	  ?>
       <tr>
      <td align="center" colspan="3">
    <input type="submit" name="apply" id="apply" value="Apply" style="background:#CC6"/>
 </td>
    </tr>
  </table>
<p>&nbsp;</p>
  </div>
  