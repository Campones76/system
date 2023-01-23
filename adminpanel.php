<?php
session_start();
session_name();
$role =  $_SESSION['status'];
if (!isset($_SESSION['email'])) {
    header("location:./");
}else if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 0) {
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width. initial-scale-1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/system/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/system/css/style_adminpanel.css">
</head>
<body>
    <div class="three">
    <div class="banner">
        <section class="admpainel-intro">
            <div class="navbar">
                <img src="adm.png" alt="adm" class="logo">
                    <ul>
                        <li><a href="logout.php" onClick="return confirm('Are you sure you want to logout?\nThis action cannot be undone!')">Logout</a></li>
                    </ul>
            </div>
        </section>
    </div>
</div>
        <div class="one">
        <a href="manageusers.php">Manage Users</a><br>
        </div>

        <div class="two">
        <a href="manageevents.php">Manage Events</a><br><br>
        </div>




   <?php
if(isset($_POST['dateOfBirth'])){
    $entered = $_POST['dateOfBirth'];
    $create = date_create($entered);
    // If user is using a browser that does not support HTML:5 input type date. 
    // check to make sure the entry is indeed in the proper format that supports date_format() 
    if($create !== false){
         $date = date_format($create, 'm-d-Y');
         // Insert into DB
    }else{
         // Handle failure error reporting
    }
}
?>
</body>
</html>