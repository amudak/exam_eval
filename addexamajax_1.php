<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="545" border="1" align="center" cellpadding="10" bgcolor="#CCCCFF">
  <tr>
    <td width="45"><font color="#FF3300">S/no</font></td>
    <td width="105"><font color="#FF3300">Subject code</font></td>
    <td width="105"><font color="#FF3300">Subject name</font></td>
    <td width="105"><font color="#FF3300">Year</font></td>
    <td width="92"><font color="#FF3300">Exam Date</font></td>
    <td width="53"><font color="#FF3300">Time</font></td>
   
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
      <td><font color="#000000"><?php echo $i ?></font></td>
      <td><font color="#000000"><?php echo $res1['code'] ?></font></td>
      <td><font color="#000000"><?php echo $res1['name'] ?></font></td>
      <td><font color="#000000"><?php echo $res1['year'] ?></font></td>
      <td><font color="#000000"><?php echo $res1['date'] ?></font></td>
	  <td><font color="#000000"><?php echo $res1['time'] ?></font></td>
      
       
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