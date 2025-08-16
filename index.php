<?php require_once "config/loader.php" ?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
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
      <form method="POST" action="action/sign-in.php">
        <h1>Sign In</h1>
        <input type="text" name="key" placeholder="Mobile/Username/Email">
        <input type="password" name="password" placeholder="Password">
        <a href="#">Forget your Password?</a>
        <div style="display: inline;">
            <button type="submit" name="signin">Sign In</button>
            <a href="otp.php">Send OTP</a>
        </div>
        <?php if(isset($_GET["notuser"])) { ?>
          <p style="width:100%" class="alert alert-danger">user not found!</p>
        <?php } else if(isset($_GET["loggined"])) { ?>
          <p style="width:100%" class="alert alert-success">login to website</p>
        <?php } ?>
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