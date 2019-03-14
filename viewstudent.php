<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="805" border="0">
    <tr>
      <td width="93">S/no</td>
      <td width="147">Student Name</td>
      <td width="151">Register Number</td>
      <td width="130">Course</td>
      <td width="73">Dob</td>
      <td width="92">Address</td>
      <td width="73">Year</td>
      <td width="73">Email</td>
      <td width="73">Phone number</td>
      <td width="73">Semester</td>
      <td width="73">college</td>
    </tr>
    <?php
	  include("connection.php");
	  $i=1;
	  $res=mysql_query("select students.*,college.colname from students,college where students.colid=college.colid");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4] ?></td>
      <td><?php echo $res1[5] ?><br />
        <?php echo $res1[6] ?><br />
        <?php echo $res1[7] ?><br />
        <?php echo $res1[8] ?></td>
      <td><?php echo $res1[9] ?></td>
      <td><?php echo $res1[10] ?></td>
      <td><?php echo $res1[11] ?></td>
      <td><?php echo $res1[12] ?></td>
      <td><?php echo $res1[15] ?></td>
      
    </tr>
    <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>