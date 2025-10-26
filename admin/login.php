<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "db_connection.php";

function validate($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if(isset($_POST['uname']) && isset($_POST['password'])){
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location: index.php?error=Username is required");
        exit();
    }
    if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }

    // Use prepared statements
    $sql = "SELECT id, user_name, password FROM users WHERE user_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
        if($row['password'] === $pass){  // Replace this with password_verify if using hashed passwords
            $_SESSION['user_name'] = $row['user_name'];
           
            $_SESSION['id'] = $row['id'];
            header("Location: homepage-works.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect Username or Password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
