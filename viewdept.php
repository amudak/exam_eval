<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="305" border="0">
    <tr>
      <td width="74">S/no</td>
      <td width="108">Department Name</td>
      
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
      <td><?php echo $i ?></td>
      <td><?php echo $res1[1] ?></td>
      
      
      </tr>
	  <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>