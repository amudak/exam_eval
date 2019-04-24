<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <table width="379" border="1" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="89"><font color="#FF3300">S/no</font></td>
      <td width="101"><font color="#FF3300">Name</font></td>
      <td width="101"><font color="#FF3300">Email</font></td>
      <td width="167"><font color="#FF3300">Register number</font></td>
      
    </tr>
    <?php
		include("connection.php");
		$college=$_GET['college'];
		$college_name;
		$a=mysql_query("SELECT * FROM `college` WHERE `lid`='$college'");
		if($b=mysql_fetch_array($a))
			{
				$college_name=$b['colname'];
			}
		//$college_name="Devagiri College";
		$name=str_split($college_name);
		$code=$name[0].$name[1].$name[2];;
		$ye=$_GET['ye'];
		$course=$_GET['course'];
		
		
		$res=mysql_query("select students.* from students,college,course where students.course=course.cid and students.colid=college.lid and students.course='$course' and students.colid='$college' and students.year='$ye' AND `students`.`regno`=0");
		if(mysql_num_rows($res)>0)
		{
			 $i=1;
	  while($res1=mysql_fetch_array($res))
		  
	 
	  {
		  $reg_no=$code.$res1['sid'];
		?>
        <tr>
      <td><font color="#000000"><?php echo $i++?></font></td>
         <td><font color="#000000"><?php echo $res1['sname']?></font></td>
            <td><font color="#000000"><?php echo $res1['email']?></font></td>
      <td><input type="regno" name="regno[]" id="regno" value="<?php echo $reg_no?>" readonly="readonly"/></td>
      <input type="hidden"name="sid[]" value="<?php echo $res1['sid'] ?>"
   
      </tr>
           <?php
		   
	  }}?>
   <tr>
      <td height="32" colspan="4" align="center"><label for="year">
       
          <input type="submit" name="allocate" id="allocate" value="Allocate" style="background:#CC6"/>
       
      </label></td>
    </tr>
        
  </table>
  <p>&nbsp;</p>

</body>
</html>