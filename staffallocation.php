<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="232" border="0">
    <tr>
      <td width="79">Exam</td>
      <td width="145"><label for="course"></label>
        <select name="course" id="course">
        <option>select</option>
        <?php
			include("connection.php");
			$a=mysql_query("select exam.*,subject.name from exam,subject where exam.sid=subject.sid");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option value="<?php echo $b[0] ?>"><?php echo $b['name']." - ".$b['year'] ?></option>
                <?php
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>
      <input type="date" name="date" id="date" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="allocate" id="allocate" value="Allocate" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
if(isset($_POST['allocate']))
{
    $exam=$_POST['course'];
	$date=$_POST['date'];
	$totalstudcount=0;
	$staffcount=0;
	$thr=10;
 	$res=mysql_query("select count(stud_ans_sheet.aid) from stud_ans_sheet where eid='$exam'");
	if($res1=mysql_fetch_array($res))
	{
		$totalstudcount=$res1[0];
	}
	echo $totalstudcount." totalstudcount<br>";
	$q=mysql_query("select count(staff.lid) from exam,course,subject,staff where exam.sid=subject.sid and subject.cid=course.cid and course.depid=staff.depid and exam.eid='$exam'");
	if($res2=mysql_fetch_array($q))
	{
		$staffcount=$res2[0];
	}	
	echo $staffcount." staff count <br>";
	$thr1=$thr*$staffcount;
	echo $thr1." thr1<br>";
	
	$aids="";
	$s=mysql_query("select * from stud_ans_sheet where eid='$exam'");
	while($re=mysql_fetch_array($s))
	{
		$aids.=$re[0]."#";
	}
	echo $aids." aids<br>";
	$aid=explode("#",$aids);
	$staffids="";	
	$m=mysql_query("select staff.* from exam,course,subject,staff where exam.sid=subject.sid and subject.cid=course.cid and course.depid=staff.depid and exam.eid='$exam' ");
	while($re1=mysql_fetch_array($m))
	{
		$staffids.=$re1['lid']."#";
	}
	$stafflid=explode("#",$staffids);
	echo $staffids." staff<br>";
	
	if($thr1<$totalstudcount)
	{
		$rem=0;
		$rem=$totalstudcount%$staffcount;
		if($rem>0)
		{
			$totalstudcount=$totalstudcount-$rem;
		}
		echo $totalstudcount." papers <br>";
		$x=0;
		$avg=$totalstudcount/$staffcount;
		echo $avg." avg <br>";	
		for($i=0;$i<$staffcount;$i++)
		{
			for($j=0;$j<$avg;$j++,$x++)
			{
				mysql_query("insert into stud_ans_sheet_all(aid,stid,date) values('$aid[$x]','$stafflid[$i]','$date')");
				echo "insert into stud_ans_sheet_all(aid,stid,date) values('$aid[$x]','$stafflid[$i]','$date') <br>";
			}
		}
	}else{
		$x=0;
		for($i=0;$i<$totalstudcount;$i++)
		{
			for($j=0;$j<$staffcount;$j++,$x++)
			{
				mysql_query("insert into stud_ans_sheet_all(aid,stid,date) values('$aid[$x]','$stafflid[$j]','$date')");
				echo "insert into stud_ans_sheet_all(aid,stid,date) values('$aid[$x]','$stafflid[$j]','$date') <br>";
			}
		}
		
		
	}
	
	
}

?>