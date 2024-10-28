<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Seller | ZZF Industri</title>
  <link rel="stylesheet" href="css/registerstyle.css">
  <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    .text {
      color: black;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="{{route('auth.sellerRegister')}}" method="POST">
      @csrf 
      <h2>Register Seller</h2>
      <div class="input-field">
        <input type="text" name="name" required>
        <label>Enter your Name</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" required>
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="number" name="account_number" required title="Please enter numbers only" maxlength="20">
        <label>Enter your Account Number</label>
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
      <button type="submit" class="text">Register</button>
      <div class="register">
        <p>Already have an account? <a href="/login">Login</a></p>
      </div>
    </form>
  </div>

  @if (Session::has('success'))
    <script>
      swal("success", "{{ Session::get('success') }}", 'success', {
          button:true,
          button:"OK",
          timer:5000
      });
    </script>
    @endif
</body>
</html>
