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
$res=mysql_query("select staff.*,department.depname,college.colname from staff,department,college where staff.depid=department.depid and staff.lid='$lid'");
if($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="291" border="0">
    <tr>
      <td width="135"><div align="center">Staff Name
        </div>
      </div></td>
      <td width="144"><div align="center"><?php echo $res1[1] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Age</div></td>
      <td>
      <div align="center"><?php echo $res1[2] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Gender</div></td>
      <td><div align="center"><?php echo $res1[3] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Place</div></td>
      <td><div align="center"><?php echo $res1[4] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Post</div></td>
      <td><div align="center"><?php echo $res1[5] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">City</div></td>
      <td><div align="center"><?php echo $res1[6] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">District</div></td>
      <td><div align="center"><?php echo $res1[7] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">State</div></td>
      <td><div align="center"><?php echo $res1[8] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Pincode</div></td>
      <td><div align="center"><?php echo $res1[9] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Phone Number</div></td>
      <td><div align="center"><?php echo $res1[10] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Qualification</div></td>
      <td><div align="center"><?php echo $res1[11] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">Email</div></td>
      <td><div align="center"><?php echo $res1[12] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">College</div></td>
      <td><div align="center"><?php echo $res1[17] ?>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Department</div></td>
      <td><div align="center"><?php echo $res1[16] ?></div></td>
    </tr>
    <?php
	  }
	  ?>
  </table>
</form>
</body>
</html>