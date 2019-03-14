<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from subject where sid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="subview.php";
	</script>
    <?php
}
?>