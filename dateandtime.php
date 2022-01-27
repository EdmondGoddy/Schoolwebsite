

<?php

mysql_connect("localhost","root","");

mysql_select_db("students");

if (isset($_POST["Logon"] ) ) {
	# code...

	$Uname=$_POST['uname'];
	$Email=$_POST['email'];
	$pnum=$_POST['pnum'];
	$textA=$_POST['textA'];

	mysql_query("insert into test (U_name,Email,phone_Number,text_Area) values ('$Uname','$Email','$pnum','$textA') ");
	header('location:TST.PHP');

}else{

?>

  <form action="" method="post" style="margin-top: 20px;">
	<input type="text" name="uname">
	<input type="text" name="email">
	<input type="text" name="pnum">
	<input type="text" name="textA">
	<input type="submit" name="Logon" value="Submit">
</form>

<?php

}

?>