<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from college where colid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="collegeview.php";
	</script>
    <?php
}
?>