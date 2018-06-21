<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login-style.css">
</head>

<body>


<!-- Login forma preuzeta sa https://codepen.io/colorlib/pen/rxddKy?q=login+form&limit=all&type=type-pens-->

 
<div class="login-page">
  <div class="form">
      <h1>Admin Login</h1>
    <form method="post" action="login.php">
      <input type="text" name="user_name" placeholder="username" required="required"/>
      <input type="password" name="user_pass" placeholder="password" required="required"/>
      <button type="submit" name="login">login</button>

    </form>
  </div>
</div>

</body>
</html>


<?php
  include "includes/database.php";

    if(isset($_POST['login'])) {
        $user_name = $_POST ['user_name'];
        $user_pass = $_POST['user_pass'];

        $select_user = "SELECT * FROM users WHERE user_name='$user_name' AND user_password='$user_pass'";

        $run_user = mysqli_query($connect, $select_user);

        if (mysqli_num_rows($run_user)> 0) {
            echo "<script>window.open('index.php?logged=Uspjesno ste logovani','_self')</script>";
            
        }
        else {
            echo "<script>alert('Pogresni podaci. Pokusajte ponovo')</script>";
        }
    }
?>

