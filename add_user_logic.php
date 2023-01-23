<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config/database.php");




if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	//				<td><input type="checkbox" name="check1" value="false"></td>
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$role = $_POST['check1'];
	$isactive = $_POST['check2'];
	//print $role;
	$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)){
		if(empty($name)) {
			print "<font color='red'>ERROR: Name field is empty.</font><br/>";
		}
		if(empty($age)) {
			print "<font color='red'>ERROR: Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			print "<font color='red'>ERROR: Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		print "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO users(name,password,age,email,status,isactive) VALUES('$name','$hashedPwd','$age','$email','$role','$isactive')");
		
		//display success message
		print "<font color='green'>Data added successfully.";
		print "<br/><a href='manageusers.php'>View Result</a>";
	}
}
?>
</body>
</html>
