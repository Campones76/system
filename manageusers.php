<?php
//including the database connection file
include_once("config/database.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
//$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC LIMIT 20"); // using mysqli_query instead
$num_per_page=10; //10 objects for page just for demonstration purposes in real world I would put 20. :P


if(isset($_GET["page"]))
{
	$page=$_GET["page"];
}
else
{
	$page=1;
}

$start_from=($page-1)*10;

$mysqlii="select * from users limit $start_from,$num_per_page";
$result=mysqli_query($conn, $mysqlii);
?>
<!DOCTYPE html>
<html lang="pt">
<head>	
	<title>Manage Users</title>
	<link rel="stylesheet" href="/system/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/system/css/style_managerusers1.css">
</head>	
<body>



<!-- The form -->
<div class="three">
    <div class="navbar">
            <ul>
                <li><a href="adminpanel.php">Back</a></li>
            </ul>
	<ul></ul>
    </div>
</div>
<br>
<div class="six">
	<form action="add_user.php" name="form1">
	<input type="submit" name="Submit" value="Add New Data">
</form>
</div>
<br><br>
<form class="UserSearch" method="post" action="find_user_logic.php">
  <input type="text" placeholder="Search..." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="quatro">
	<table width='100%' border=1>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		print "<tr>";
		print "<td>".$res['name']."</td>";
		print "<td>".$res['age']."</td>";
		print "<td>".$res['email']."</td>";
		print "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?\\nThis action cannot be undone!')\">Delete</a></td>";		
	}
	?>
	

	</table><br>
	<?php 
    
    
    $mysqlii="select * from users";
    $result=mysqli_query($conn, $mysqlii);
    $total_records=mysqli_num_rows($result);
    $total_pages=ceil($total_records/$num_per_page);
    
    for($i=1;$i<=$total_pages;$i++)
    {
        print "<a href='manageusers.php?page=".$i."'> ".$i."</a>";
		//print "<td><a href=\"subscribe9.php?id=$res[id]\">Subscribe</a>";	
    }
    
    ?>
</div>
</body>
</html>
