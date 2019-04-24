
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
                var url="addexam.php";
				
                url +="?sem=" +to+"&cid="+document.getElementById("course").value;
				alert(url);
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("subject").innerHTML=xmlHttp.responseText   
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
  <table width="270" border="0" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="119"><font color="#000000">Course</font></td>
      <td width="135"><label for="course"></label>
        <select name="course" id="course" >
          <option>select</option>
          <?php
			include("connection.php");
			$a=mysql_query("select * from course");
			while($b=mysql_fetch_array($a))
			{
				?>
          <option value="<?php echo $b[0] ?>"><?php echo $b[2] ?></option>
          <?php
			}
		?>
        </select></td>
    </tr>
    
    <tr>
      <td><font color="#000000">Semester</font></td>
      <td><label for="department"></label>
        <label for="sem"></label>
        <select name="sem" id="sem" onchange="showclass(this.value)">
        
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      
        </select></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <div id="subject">
  </div>
  
</form>
</body>
</html>

 <?php
  include("connection.php");
if(isset($_POST['add']))
{

	$year=$_POST['year'];
	$sid=$_POST['sid'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	for($j=0;$j<sizeof($year);$j++)
	{
	$qry=mysql_query("insert into exam values(null,'$sid[$j]','$date[$j]','$year[$j]','$time[$j]')");
	if($qry>0)
	{
		?>
       <script>
	   alert("successfully added");
	   </script> 
        <?php
	}
	}
}

?>

<?php
include("footer.php");
?>