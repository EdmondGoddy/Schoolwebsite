<html>
   <head>
      <title>Student's Registration form</title>
   </head>
   <body style="background: rgba(200,150,350,0.6);">
       <form method="post" action="user_registration.php">
       	   <table width="500" border="5" align="center" cellspacing="0">
       	   	   <tr>
       	   	   	  <th bgcolor="lightgray" colspan="5">Student's Registration Form</th>
       	   	   </tr>
       	   	   <tr> 
       	   	   	  <td align="right">Student's Name:</td>
       	   	   	  <td> <input type="text" name="user_name">
       	   	   	  <font color="red"><?php echo @$_GET['name']; ?></font>
       	   	   	  </td>
       	   	   </tr>
       	   	   <tr>
       	   	   	  <td align="right">Father's Name:</td>
       	   	   	  <td><input type="text" name="father_name">
       	   	   	  <font color="red"><?php echo @$_GET['father']; ?></font>
       	   	   	  </td>
       	   	   </tr>
       	   	   <tr>
       	   	   	  <td align="right">School's Name:</td>
       	   	   	  <td><input type="text" name="school_name">
       	   	   	  <font color="red"><?php echo @$_GET['school']; ?></font>
       	   	   	  </td>
       	   	   </tr>
       	   	   <tr>
       	   	   	  <td align="right">Roll No:</td>
       	   	   	  <td><input type="text" name="roll_no">
       	   	   	  <font color="red"><?php echo @$_GET['roll']; ?></font>
       	   	   	  </td>
       	   	   </tr>
       	   	    <tr>
       	   	   	  <td align="right">Class:</td>
       	   	   	  <td> 
       	   	   	     <select name="student_class">
       	   	   	     	  <option value="null">Select Class</option>
       	   	   	     	  <option value="Computer Engineering">Computer Engineering</option>
       	   	   	     	  <option value="Electrical Engineering">Electrical Engineering</option>
       	   	   	     	  <option value="Accounting">Accounting</option>
       	   	   	     	  <option value="Management">Management</option>
       	   	   	     	  <option value="Banking And Finance">Banking And Finance</option>
       	   	   	     </select>
       	   	   	     <font color="red"><?php echo @$_GET['class']; ?></font>
       	   	   	  </td>
       	   	   </tr>
       	   	    <tr>
       	   	   	  <td align="center" colspan="6" ><input type="submit" name="submit" value="Submit" ></td>
       	   	   </tr>
       	   </table>
       </form>
   </body>
</html>

<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students");

if (isset($_POST['submit'])) {
	# code...
$student_name=$_POST['user_name'];
$student_father=$_POST['father_name'];
$student_school=$_POST['school_name'];
$student_roll=$_POST['roll_no'];
$student_class=$_POST['student_class'];

if ($student_name=='') {
	# code...
	echo 
	"<script>window.open('user_registration.php?name=Name is required','_self') </script>";
	exit();
}

if ($student_father=='') {
	# code...
	echo 
	"<script>window.open('user_registration.php?father=Father's name is required','_self') </script>";
	exit();
}

if ($student_school=='') {
	# code...
	echo 
	"<script>window.open('user_registration.php?school=Name of school is required','_self') </script>";
	exit();
}

if ($student_roll=='') {
	# code...
	echo 
	"<script>window.open('user_registration.php?roll=Enter roll number ','_self') </script>";
	exit();
}

if ($student_class=='null') {
	# code...
	echo 
	"<script>window.open('user_registration.php?class=Select your class','_self') </script>";
	exit();
}

$que="insert into u_reg (u_name,u_father,u_school,u_roll,u_class) values ('$student_name','$student_father','$student_school','$student_roll','$student_class') ";
if (mysql_query($que)) {
	# code...
	echo "<center><strong>The following data has been inserted into our database:</strong></center>";
	echo "<table align='center' border='4 '><tr><td>$student_name</td>
	<td>$student_father</td>
	<td>$student_school</td>
	<td>$student_roll</td>
	<td>$student_class</td>
	</tr></table>";
}

}

?>
