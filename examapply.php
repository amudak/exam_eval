<div id="student">

<table width="328" border="0">
    <tr>
      <td width="25">s/no</td>
      <td width="105">Register Number</td>
      <td width="85">Student</td>
      <td width="85">&nbsp;</td>
    </tr>
    <?php
include("connection.php");
  $i=0;
$id=$_GET['id'];

$res=mysql_query("select students.* from students,subject,exam where exam.sid=subject.sid and subject.cid=students.course and exam.eid='$id'");

while($res1=mysql_fetch_array($res))
		    
	  {
		  $i++;
	 
?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['sname'] ?>
      </td>
      <td><?php echo $res1['regno'] ?></td>
      <td><input type="checkbox" name="sid[]" id="check" value="<?php echo $res1['lid'] ?>" />
      <label for="check"></label></td>
    </tr>
     <?php 
	  }
	  ?>
  </table>
<p>&nbsp;</p>
  </div>
  