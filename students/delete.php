<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students");

$delete_record=$_GET['del'];

$query="delete from u_reg where u_id='$delete_record'";

if (mysql_query($query)) {
	# code...
	echo "<script>window.open('view.php?deleted=Record has been deleted successfully!','_self') </script>";
}

?>