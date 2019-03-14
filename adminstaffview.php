<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="858" border="1">
    <tr>
      <td width="47">s/no</td>
      <td width="80">Staff Name</td>
      <td width="50">Age</td>
      <td width="59">Gender</td>
      <td width="102">Address</td>
      <td width="69">Email</td>
      <td width="58">Phone Number</td>
      <td width="75">Qualification</td>
      <td width="68">College</td>
      <td width="104">Department</td>
    </tr>
    <?php
	  include("connection.php");
	  $i=1;
	  $res=mysql_query("select staff.*,department.depname,college.colname from staff,department,college where staff.depid=department.depid and staff.colid=college.colid");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4] ?> <?php echo $res1[5] ?> <?php echo $res1[6] ?> <?php echo $res1[7] ?> <?php echo $res1[8] ?> <?php echo $res1[9] ?></td>
      <td><?php echo $res1[12] ?></td>
      <td><?php echo $res1[10] ?></td>
      <td><?php echo $res1[11] ?></td>
      <td><?php echo $res1[13] ?></td>
      <td><?php echo $res1[14] ?></td>
    </tr>
    <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>