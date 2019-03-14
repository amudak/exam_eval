<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("connection.php");
$i=0;
session_start();
$lid=$_SESSION['lid'];
//echo $lid;
$res=mysql_query("select students.*,college.colname from students,college where students.colid=college.lid and students.lid='$lid'");
//echo "select students.*,college.colname from students,college where students.colid=college.colid and students.lid='$lid'";
if($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="272" border="0">
    <tr>
      <td>student name</td>
      <td><?php echo $res1[1] ?></td>
    </tr>
    <tr>
      <td width="112">Register number</td>
      <td width="144"><?php echo $res1[2] ?></td>
    </tr>
    <tr>
      <td>college name</td>
      <td><?php echo $res1[15] ?></td>
    </tr>
    <tr>
      <td>course</td>
      <td><?php echo $res1[3] ?></td>
    </tr>
    <tr>
      <td>sem</td>
      <td><?php echo $res1[12] ?></td>
    </tr>
    <tr>
      <td>year</td>
      <td><?php echo $res1[9] ?></td>
    </tr>
    <tr>
      <td>date of birth</td>
      <td><?php echo $res1[4] ?></td>
    </tr>
    <tr>
      <td>place</td>
      <td><?php echo $res1[5] ?></td>
    </tr>
    <tr>
      <td>post</td>
      <td><?php echo $res1[6] ?></td>
    </tr>
    <tr>
      <td>District</td>
      <td><?php echo $res1[7] ?></td>
    </tr>
    <tr>
      <td>pin code</td>
      <td><?php echo $res1[8] ?></td>
    </tr>
    <tr>
      <td>email</td>
      <td><?php echo $res1[10] ?></td>
    </tr>
    <tr>
      <td>Phonenumber</td>
      <td><?php echo $res1[11] ?></td>
    </tr>
    <?php
	  }
	  ?>
	
  </table>
</form>
</body>
</html>