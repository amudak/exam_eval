
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
                var url="addexamajax.php";
				
                url +="?sem=" +to+"&cid="+document.getElementById("course").value;
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
  <p>&nbsp;</p>
  <table width="200" border="0" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="110"><font color="#000000">Course</font></td>
      <td width="74"><label for="course"></label>
        <select name="course" id="course">
         <?php
		include("connection.php");
		$res=mysql_query("select * from course");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		?>
        <option value="<?php echo $res1['cid']?>"><?php echo $res1['cname']?></option>
        <?php
	  }?>
      </select></td>
    </tr>
    <tr>
      <td><font color="#000000">Semester</font></td>
      <td><label for="sem"></label>
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
include("footer.php");
?>