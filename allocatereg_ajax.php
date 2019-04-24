
<?php
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>


            var xmlHttp;
            function showclass(to){
				college=document.getElementById("college").value;
				year=document.getElementById("year").value;
				//alert(to);
				//alert(college)
				//alert(year)
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
                var url="allocate_regno.php";
				
                url +="?course="+to+"&ye="+year+"&college="+college;
				//alert(url)
				
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("res").innerHTML=xmlHttp.responseText   
                }
	}

</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="286" height="106" border="0" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td><font color="#000000">College</font></td>
      <td><label for="college"></label>
        <select name="college" id="college">
        <?php
			include("connection.php");
			$a=mysql_query("select * from college");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option>select</option>
          <option value="<?php echo $b["lid"] ?>"><?php echo $b[1] ?></option>
          <?php
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td width="121"><font color="#000000">Year</font></td>
      <td width="149"><label for="course">
        <select name="year" id="year" >
       
          <option>select</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="26"><font color="#000000">Course</font></td>
      <td><select name="course" id="course" onchange="showclass(this.value)">
          <?php
			include("connection.php");
			$a=mysql_query("select * from course");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option>select</option>
          <option value="<?php echo $b[0] ?>"><?php echo $b[2] ?></option>
          <?php
			}
		?>
      </select></td>
    </tr>
    
  </table>
  <div id="res" align="center">
  </div>
</form>
</body>
</html>

<?php
if(isset($_POST['allocate']))
{
	$p;
	$regn=$_POST['regno'];
	$sid=$_POST['sid'];
	for($i=0;$i<sizeof($regn);$i++)
	{
		
		$p=mysql_query("update students set regno='$regn[$i]' where sid='$sid[$i]'");
	}
	if($p>0)
	{
		?>
     <script>
	 alert("successfully added");
	 </script>   
        <?php
	}
	
	
}
	
?>
<?php
include("footer.php");
?>