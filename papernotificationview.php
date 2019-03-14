<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1090" border="0">
    <tr>
      <td width="86">S/no</td>
      <td width="113">Name</td>
      <td width="143">Register number</td>
      <td width="120">College Name</td>
      <td width="128">Pages</td>
      <td width="125">Exam </td>
      <td width="83">year</td>
      <td width="65">date</td>
      <td width="59">time</td>
      <td width="104">status</td>
    </tr>
    <?php
	
	  include("connection.php");
	  $i=0;
	  session_start();
	  $lid=$_SESSION['lid'];
	  $res=mysql_query("select paper_notification.*,stud_ans_pages.page_no,exam.year,subject.name,students.sname,students.regno,college.colname from paper_notification,stud_ans_pages,stud_ans_sheet,exam,subject,students,college where paper_notification.pid=stud_ans_pages.pid and stud_ans_pages.aid=stud_ans_sheet.aid and stud_ans_sheet.eid=exam.eid and exam.sid=subject.sid and stud_ans_sheet.sid=students.lid and students.colid=college.lid and college.lid='$lid'");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1[8] ?></td>
      <td><?php echo $res1[9] ?></td>
      <td><?php echo $res1[10] ?></td>
      <td><?php echo $res1[5] ?></td>
      <td><?php echo $res1[7] ?></td>
      <td><?php echo $res1[6] ?></td>
      <td><?php echo $res1[2] ?></td>
      <td><?php echo $res1[3] ?></td>
      <td><?php echo $res1[4] ?></td>
    </tr>
    <?php 
	  }
	  ?>
  </table>
</form>
</body>
</html>