
<?php

	include("header.php");
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="305" border="1" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="74"><font color="#FF3300">S/no</font></td>
      <td width="108"><font color="#FF3300">Department Name</font></td>
      <td width="63">&nbsp;</td>
       <td width="63">&nbsp;</td>
    </tr>
    <tr>
      
    </tr>
     <?php
	  include("connection.php");
	  $i=0;
	  $res=mysql_query("select * from department");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><font color="#000000"><?php echo $i ?></font></td>
      <td><font color="#000000"><?php echo $res1[1] ?></font></td>
      
      <td><a href="depdelete.php?id=<?php echo $res1[0]?>">delete</a></td>
       <td><a href="depedit.php?id=<?php echo $res1[0]?>#form1">edit</a></td>
      </tr>
	  <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>
<?php

	include("footer.php");
	?>