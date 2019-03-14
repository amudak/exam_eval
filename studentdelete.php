<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from student where sid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="studentview.php";
	</script>
    <?php
}
?>