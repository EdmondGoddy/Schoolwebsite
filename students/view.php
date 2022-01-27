<?php

session_start();

if(!$_SESSION['admin_name'] ){

	header('location:admin_login.php?error=<br><div style="width:400px; background:gray;"> Your are not an Administrator..<br>Please enter Admin name<br> and Admin password to login!</div>');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Viewing the Records</title>
</head>
<body style="background: rgba(300,100,350,0.5);">
 <a href="user_registration.php">Insert New records</a>
 <strong>Welcome:<font color="#FFF" size="4">
 	<?php echo $_SESSION['admin_name']; ?>
 </font></strong>
 &nbsp;&nbsp;&nbsp;
 <a href="logout.php">Logout</a>
  <center><font color="red" size="8"><?php echo @$_GET['deleted'] ;?>
  	<?php echo @$_GET['updated'] ; ?>
  	<?php echo @$_GET['logged']; ?>
  </font></center>
    <table align="center" width="1000" border="4" cellspacing="0" bgcolor="white">
    	<tr>
    		<td align="center" bgcolor="lightgray" style="font-size: x-large; color: white;" colspan="20"><h1>Viewing all the records</h1></td>
    	</tr>

    	<tr align="center">
    		<th>Serial No</th>
    		<th>Studnt's Name</th>
    		<th>Father's Name</th>
    		<th>Roll No</th>
    		<th>Delete</th>
    		<th>Edit</th>
    		<th>Details</th>
    	</tr>

    	
<?php 

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students");

$que="select * from u_reg order by 1 DESC";
$run=mysql_query($que); 

$i=1;

while ($row=mysql_fetch_array($run)) {
  	# code...
  	$u_id=$row['u_id'];
  	$u_name=$row['1'];
  	$u_father=$row['2'];
  	$u_roll=$row['4'];
    

?>
<tr align="center">
    		<td><?php echo $i;$i++;; ?></td>
    		<td><?php echo $u_name; ?></td>
    		<td><?php echo $u_father; ?></td>
    		<td><?php echo $u_roll; ?></td>
    		<td><a href="delete.php?del=<?php echo $u_id; ?>">Delete</a></td>
    		<td><a href="edit.php?edit=<?php echo $u_id; ?>">Edit</a></td>
    		<td><a href="view.php?details=<?php echo $u_id; ?>"> Details</a></td>
    	</tr>
<?php

 } ?>    	
    </table>

<?php 

$record_details=@$_GET['details'];
$query="select * from u_reg where u_id='$record_details' ";
$run1=mysql_query($query);
while ($row1=mysql_fetch_array($run1)) {
	# code...
	$name=$row1[1];
	$father=$row1[2];
	$school=$row1[3];
	$roll=$row1[4];
	$class=$row1[5];

?>
<br><br>
<table align="center" border="4" bgcolor="pink" width="800" >
    <tr>
    	<td colspan="6" bgcolor="orange" align="center"><h2>Your details here</h2>
    	</td>
    </tr>
	<tr align="center" bgcolor="white">
		<td><?php echo $name; ?></td>
		<td><?php echo $father; ?></td>
		<td><?php echo $school; ?></td>
		<td><?php echo $roll; ?></td>
		<td><?php echo $class; ?></td>
	</tr>
<?php
}
?>
</table><br><br><br><br><br>
<form action="view.php" method="get">
	<input type="text" name="search" placeholder="Search a record">
	<input type="submit" name="submit" value="Find Now">
</form>
<?php

if (isset($_GET['search'] )) {
	# code...
	$search_record=$_GET['search'];

	$query2="select * from u_reg where u_name='$search_record' OR u_roll='$search_record' ";
	$run2=mysql_query($query2);

	while ($row2=mysql_fetch_assoc($run2)) {
		# code...
		$name123=$row2['u_name'];
		$father123=$row2['u_father'];
		$school123=$row2['u_school'];
		$roll123=$row2['u_roll'];
		$class123=$row2['u_class'];
?>
<table width="800" bgcolor="lightgray" align="center" border="1" style=">
	<tr align="center">
		<td><?php echo $name123; ?></td>
		<td><?php echo $father123; ?></td>
		<td><?php echo $school123; ?></td>
		<td><?php echo $roll123; ?></td>
		<td><?php echo $class123; ?></td>
	</tr>
</table>
<?php 
  }

}
?>
</body>
</html>


