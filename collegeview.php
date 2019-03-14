<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="805" border="1">
    <tr>
      <td width="93">S/no</td>
      <td width="147">College Name</td>
      <td width="151">College Code</td>
      <td width="130">Address</td>   
      <td width="73">Phone</td>
      <td width="92">Email</td>
      <td width="73">&nbsp;</td>
      <td width="73">&nbsp;</td>
    </tr>
    
    <?php
	  include("connection.php");
	  $i=0;
	  $res=mysql_query("select * from college");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3]?>
      <?php echo $res1[4]?></br>
	  <?php echo $res1[5]?></br>
      <?php echo $res1[6]?></br>
      <?php echo $res1[7]?></br>
      <?php echo $res1[8]?></br></td>
     <td> <?php echo $res1[9]?></td>
      <td><?php echo $res1[10]?></td>
      <td><a href="coldelete.php?id=<?php echo $res1[0]?>">delete</a></td>
       <td><a href="coledit.php?id=<?php echo $res1[0]?>">edit</a></td>
      </tr>
	  <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>