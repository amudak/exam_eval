<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>


            var xmlHttp;
            function showclass(to){
				alert(to);
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="ajax_uploadans_sheet.php";
				
                url +="?id=" +to;
				alert(url);
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("student").innerHTML=xmlHttp.responseText   
                }
	}

</script>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data"  name="form1" id="form1">
  <table width="291" border="0">
    <tr>
      <td width="115">Exam</td>
      <td width="160"><label for="exam"></label>
        <select name="exam" id="exam" onchange="showclass(this.value)">
        <option value="-1">select</option>
        <?php
			include("connection.php");
			$a=mysql_query("select exam.*,subject.name from exam,subject where exam.sid=subject.sid order by exam.eid desc");
			while($b=mysql_fetch_array($a))
			{
				?>
                
                <option value="<?php echo $b[0] ?>"><?php echo $b[5] ?> <?php echo $b[3] ?></option>
                <?php
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Student</td>
      <td><label for="student"></label>
        <select name="student" id="student">
        
      </select></td>
    </tr>
    <tr>
      <td>Number of pages</td>
      <td><label for="pages"></label>
      <input type="text" name="pages" id="pages" /></td>
    </tr>
    <tr>
      <td>Uplod File</td>
      <td><label for="fileField"></label>
      <input type="file" name="fileField" id="fileField" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="allocate" id="allocate" value="Allocte" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['allocate']))
{
	include("connection.php");
	$sname=$_POST['exam'];
	$eid=$_POST['student'];
	$no_of_pages=$_POST['pages'];
	$file=$_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'],"answer_paper/".$file);
	$hash=sha1_file("answer_paper/".$file);
	$qry=mysql_query("insert into stud_ans_sheet values(null,'$sname','$eid','$no_of_pages',curdate())");
	$aid=mysql_insert_id();
	mysql_query("insert into stud_ans_pages(aid,page_no,file_name,hash_value)values('$aid','0','$file','$hash')");
	 
	if($qry>0)
	{
		?>
        <script>
		alert("successfully added");
		window.location="college_home.php";
		</script>
        <?php
	}
}

?>