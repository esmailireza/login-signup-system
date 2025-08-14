<?php require_once "config/loader.php" ?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
        <!-- sign up-->
    <div class="form-container sign-up">
      <form method="POST" action="action/sign-up.php">
        <h1>Create Account</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="mobile" placeholder="MobileNumber">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="signup">Sign Up</button>
      </form>
    </div>
    <!-- sign in -->
    <div class="form-container sign-in">
      <form>
        <h1>Sign In</h1>
        <input type="email" placeholder="Mobile/Username/Email">
        <input type="password" placeholder="Password">
        <a href="#">Forget your Password?</a>
        <div style="display: inline;">
            <button>Sign In</button>
            <a href="otp.php">Send OTP</a>
        </div>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="/assets/js/script.js"></script>
</html>