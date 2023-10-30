<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="forgot_pass.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <!-- <a href="../forgot_pass/forgot_pass.html">
          <h2 class="inactive underlineHover"> Change Password? </h2>
          </a> -->
          <h2 class="active">Change Password </h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <!-- <img src="" id="icon" alt="User Icon" /> -->
          </div>
      
          <!-- Login Form -->
          <form action="change_password_process.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="cp_email" placeholder="Tài khoản">
            <input type="text" id="password" class="fadeIn third" name="old_password" placeholder="Mật khẩu cũ">
            <input type="text" id="password" class="fadeIn third" name="new_password" placeholder="Mật khẩu mới">
            <input type="submit" class="fadeIn fourth" value="Thay đổi mật khẩu">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="../login/login.php">Login</a>
          </div>
      
        </div>
      </div>
</body>
</html>