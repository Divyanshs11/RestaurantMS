<?php
session_start();

if(isset($_SESSION['userid'])){
    echo "Welcome, " . $_SESSION['userid'] . "!";
} else {
    header("location: login.php"); 
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Page</title>
</head>
<body>
    <h1>Hello user</h1>
    <!-- Your HTML content -->
    header("location: login.php");
    window.location = 'http://localhost/phpsixd/index.php';
</body>
</html>
