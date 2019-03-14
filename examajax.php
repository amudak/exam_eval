<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="545" border="0">
  <tr>
    <td width="45">s/no</td>
    <td width="105">Subject code</td>
    <td width="105">sub name</td>
    <td width="105">year</td>
    <td width="92">Exam Date</td>
    <td width="53">Time</td>
    <td></td>
    <td></td>
  </tr>
    <?php
	  include("connection.php");
	  $i=0;
	  $cid=$_GET['cid'];
	  $sem=$_GET['sem'];
	  $res=mysql_query("select exam.*,subject.* from subject,exam where exam.sid=subject.sid and subject.cid='$cid' and subject.sem='$sem'");
	  while($res1=mysql_fetch_array($res))
		    
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['code'] ?></td>
      <td><?php echo $res1['name'] ?></td>
      <td><?php echo $res1['year'] ?></td>
      <td><?php echo $res1['date'] ?></td>
	  <td><?php echo $res1['time'] ?></td>
      
       
      </tr>
	  <?php 
	  }
	  ?>
  </table>
  
  <tr>
    <td colspan="6"><div align="center"></div></td>
  </tr>
</table>
</body>
</html>