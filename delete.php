<?php
//including the database connection file
include("config/database.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql= "SELECT * FROM userevents WHERE user_events_id=" . $id;
$result = mysqli_query($conn, $sql);

if ($result == $id) {
    print("ERROR");
} else{
    $result = mysqli_query($conn, "DELETE FROM users WHERE id=" . $id);
}



//redirecting to the display page (index.php in our case)
header("Location:manageusers.php");
?>

