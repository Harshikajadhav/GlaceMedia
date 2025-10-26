<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(!isset($_SESSION['id']) || !isset($_SESSION['user_name'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
