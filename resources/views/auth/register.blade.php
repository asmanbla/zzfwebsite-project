<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | ZZF Industri</title>
  <link rel="stylesheet" href="css/registerstyle.css">
  <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />

  <style>
    .text {
      color: black;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Register</h2>
        <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" class="text"> 
        <a href="/login">Register </a>
      </button>
      <div class="register">
        <p>Already have an account? <a href="/login">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>