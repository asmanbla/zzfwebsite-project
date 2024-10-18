<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Customer | ZZF Industri</title>
  <link rel="stylesheet" href="css/registercust.css">
  <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <style>
    .text {
      color: black;
    }

    .wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
}

.left-column, .right-column {
  display: flex;
  flex-direction: column;
  width: 48%;
}

.input-field {
  position: relative;
  margin-bottom: 20px;
}

.input-field input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: 0.3s ease;
}

.input-field input:focus ~ label,
.input-field input:not(:placeholder-shown) ~ label {
  top: -10px;
  left: 10px;
  font-size: 12px;
  color: white;
}

.forget {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 20px;
}

button {
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  color: #fff;
  border: none;
  border-radius: 5px;
}

.register {
  margin-top: 20px;
}

  </style>
</head>
<body>
<div class="wrapper">
  <form action="{{route('auth.customerRegister')}}" method="POST">
    @csrf
    <h2>Customer Register</h2>
    
    <div class="form-container">
      <!-- Kolom kiri -->
      <div class="left-column">
        <div class="input-field">
          <input type="text" name="name" required>
          <label>Enter your Name</label>
        </div>
        <div class="input-field">
          <input type="email" name="email" required>
          <label>Enter your Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" required>
          <label>Enter your password</label>
        </div>
      </div>

      <!-- Kolom kanan -->
      <div class="right-column">
        <div class="input-field">
          <input type="number" name="phone" required>
          <label>Enter your Phone</label>
        </div>
        <div class="input-field">
          <input type="text" name="address1" required>
          <label>Enter your Address 1</label>
        </div>
        <div class="input-field">
          <input type="text" name="address2" required>
          <label>Enter your Address 2</label>
        </div>
      </div>
    </div>
    
    <div class="forget">
      <label for="remember">
        <input type="checkbox" id="remember">
        <p>Remember me</p>
      </label>
      <a href="#">Forgot password?</a>
    </div>
    
    <button type="submit" class="text">Daftar Sekarang</button>
    
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
