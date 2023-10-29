<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <a href="../login/login.php">
          <h2 class="inactive underlineHover"> Sign In </h2>
          </a>
          <h2 class="active">Sign Up </h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <!-- <img src="" id="icon" alt="User Icon" /> -->
          </div>
      
          <!-- Login Form -->
          <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Tài khoản">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Mật khẩu">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="Xác nhận mật khẩu">
            <input type="submit" class="fadeIn fourth" value="Sign up">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
          </div>
      
        </div>
      </div>
</body>
</html>