<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTP</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form>
        <h1>Sign Up</h1>
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="MobileNumber">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <h1>OTP</h1>
        <input type="number" placeholder="enter your otp">
        <a href="#">Forget your Password?</a>
        <div style="display: inline;">
            <button>send To Mobile</button>
            <a href="otp.php">to Email</a>
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