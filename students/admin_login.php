<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body style="background:  rgba(100,150,250,0.6)">
    <form action="admin_login.php" method="post">
    	 <table width="400" border="2" align="center" style="background:  rgba(200,300,250,0.7)">
    	      <tr>
    	      	<td align="center" bgcolor="pink" colspan="6"><h2>Admin Form</h2></td>
    	      </tr>
    	 	  <tr>
    	 	  	<td align="right">Admin Name:</td>
    	 	  	<td><input type="text" name="admin_name" > </td>
    	 	  </tr>

    	 	  <tr>
    	 	  	<td align="right">Admin Password:</td>
    	 	  	<td><input type="password" name="admin_pass"> </td>
    	 	  </tr>

    	 	  <tr>
    	 	  	<td colspan="4" align="center"><input type="submit" name="login" value="Login"> </td>
    	 	  </tr>
    	 </table>
    </form>
    <center><font color="red" size="5"><?php echo @$_GET['error']; ?></font></center>
</body>
</html>

<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students");

if (isset($_POST['login'] )) {
	# code...
	$admin_name=$_SESSION['admin_name']=$_POST['admin_name'];
	$admin_pass=$_POST['admin_pass'];

	

	$query="select * from login where user_name='$admin_name' AND user_password='$admin_pass' ";

	$run=mysql_query($query);

	if (mysql_num_rows($run)>0) {
		# code...
		echo "<script>window.open('view.php?logged=Logged in Successfully..!','_self') </script>";
	}else{
		echo "<script>alert('Password or User name is incorrect!')</script>";
	}

}

?>
