<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="858" border="0">
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
	  $clid=$_GET['cid'];
	  $res=mysql_query("select staff.*,department.depname,college.colname from staff,department,college where staff.depid=department.depid and staff.colid=college.colid and staff.colid='$clid'");
	  //$res=mysql_query("select * from staff where colid='$clid'");
	  
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['sname'] ?></td>
      <td><?php echo $res1['age'] ?></td>
      <td><?php echo $res1['gender'] ?></td>
      <td><?php echo $res1['place'] ?>
     <?php echo $res1['post'] ?>
      <?php echo $res1['city'] ?>
      <?php echo $res1['district'] ?>
       <?php echo $res1['pincode'] ?>
       <td><?php echo $res1['email'] ?></td>
       <td><?php echo $res1['phone'] ?></td>
       <td><?php echo $res1['quali'] ?></td>
       <td><?php echo $res1['colname'] ?></td>
       <td><?php echo $res1['depname'] ?></td>
       
    <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>