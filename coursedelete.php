<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from course where cid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="courseview.php";
	</script>
    <?php
}
?>