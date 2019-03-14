<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="725" border="1">
    <tr>
      <td width="103">S/no</td>
      <td width="148">Department Name</td>
      <td width="131">Course Name</td>
      <td width="124">Course code</td>
      <td width="95">Semester</td>
      <td></td>
      <td></td>
      
    </tr>
    <?php
	  include("connection.php");
	  $i=1;
	  $res=mysql_query("select course.*,department.depname from course,department where course.depid=department.depid");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[5] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4] ?></td>
       <td><a href="coursedelete.php?id=<?php echo $res1[0]?>">delete</a></td>
       <td><a href="courseedit.php?id=<?php echo $res1[0]?>">edit</a></td>
      </tr>
   
     
   
	  <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>