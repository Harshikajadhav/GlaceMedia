
<?php
include('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
  <style>
    html, body{
      width: 100%;
      height: 100%;
    }
    body {
      background-image: url('https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
      background-repeat: no-repeat;
      background-size: cover;
      color: white;
    }
    form{
      background-color:rgb(41, 41, 41);
      border-radius: 20px;
      padding: 50px;
    }
/* login form code starts*/

.login-form{
    margin: 0 30%;
}
.login-form input{
    width: 60%;
}
/* login form code ends*/
  </style>
</head>
<body><br><br><br><br><br><br><br><br>
  <form action="login.php" method="post" class="login-form">
    <h2>LOGIN</h2>
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php } ?>
    <label>Username:</label><br>
    <input type="text" name="uname" placeholder="Username"><br>
    <label>Password:</label><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>