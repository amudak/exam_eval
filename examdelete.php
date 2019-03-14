<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from exam where eid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="examview.php";
	</script>
    <?php
}
?>