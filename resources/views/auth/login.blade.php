<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | ZZF Industri</title>
  <link rel="stylesheet" href="css/loginstyle.css">
  <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="wrapper">
        <form action="{{ route('loginproses') }}" method="POST">
            @csrf
            <h2>Login</h2>
                <div class="input-field">
                    <input type="text" name="email" required>
                    <label>Enter your email</label>
                  </div>
                  <div class="input-field">
                    <input type="password" name="password" required>
                    <label>Enter your password</label>
                  </div>
                  <button type="submit">Log In</button>
                  <div class="register">
                        <p>Don't have an account? <a href="/register">Register</a></p>
                  </div>
        </form>
    </div>

  @if (Session::has('sukses'))
    <script>
      swal("Sukses", "{{ Session::get('sukses') }}", 'success', {
          button:true,
          button:"OK",
          timer:5000
      });
    </script>
    @endif 
</body>
</html>

