<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>


            var xmlHttp;
            function showclass(){
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
                var url="ajax_subject.php";
				var sem=document.getElementById("sem").value;
				var crs=document.getElementById("select").value;
                url +="?cid=" +crs+"&sem="+sem;
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
<table width="200" border="0">
    <tr>
      <td>Course</td>
      <td><select name="select" id="select" onchange="showclass()">
        <option>Select</option>
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
      <td>semester</td>
      <td><label for="select"></label>
        <label for="sem"></label>
      <input type="text" name="sem" id="sem" onkeydown="showclass()" onkeyup="showclass()" onkeypress="showclass()" /></td>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <table width="540" border="0" id="subject">

  </table>
  
</form>
</body>
</html>