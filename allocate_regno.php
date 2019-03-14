<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

  <table width="379" border="1">
    <tr>
      <td width="89">s/no</td>
      <td width="101">Name</td>
      <td width="101">Email</td>
      <td width="167">Register number</td>
      
    </tr>
    <?php
		include("connection.php");
		$college=$_GET['college'];
		$ye=$_GET['ye'];
		$course=$_GET['course'];
		
		
		$res=mysql_query("select students.* from students,college,course where students.course=course.cid and students.colid=college.lid and students.course='$course' and students.colid='$college' and students.year='$ye'");
		if(mysql_num_rows($res)>0)
		{
			 $i=1;
	  while($res1=mysql_fetch_array($res))
		  
	 
	  {
		?>
        <tr>
      <td><?php echo $i++?></td>
         <td><?php echo $res1['sname']?></td>
            <td><?php echo $res1['email']?></td>
      <td><input type="regno" name="regno[]" id="regno" /></td>
      <input type="hidden"name="sid[]" value="<?php echo $res1['sid'] ?>"
   
      </tr>
           <?php
	  }}?>
   <tr>
      <td height="32" colspan="4"><label for="year">
        <div align="center">
          <input type="submit" name="allocate" id="allocate" value="Allocate" />
        </div>
      </label></td>
    </tr>
        
  </table>
  <p>&nbsp;</p>

</body>
</html>