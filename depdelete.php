<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from department where depid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="deptview.php";
	</script>
    <?php
}
?>