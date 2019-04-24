
<?php

	include("College_header.php");
	?>
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
                var url="examapply.php";
				
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
<form id="form1" name="form1" method="post" action="">
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="77"><font color="#000000">Exam</font></td>
      <td width="107"><label for="exam"></label>
        <select name="exam" id="exam" onchange="showclass(this.value)">
        <option>select</option>
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
  </table>
  <div id="student" align="center">
  
  </div>
 
</form>
</body>
</html>
<?php
$qry;
if(isset($_POST['apply']))
{
	if(isset($_POST['sid'])){
		$sname=$_POST['sid'];
		$eid=$_POST['exam'];
		$qry=0;
		for($i=0;$i<sizeof($sname);$i++)
		{
		
		$qry=mysql_query("insert into examapplication values(null,'$sname[$i]','$eid',curdate())");
		}
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
}

?>

<?php

	include("footer.php");
	?>