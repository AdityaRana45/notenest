<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NoteNest Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome for icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <x-layout/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .login-card {
      position: relative;
      width: 350px;
      padding: 40px 30px;
      background: #07182E;
      border-radius: 20px;
      overflow: hidden;
      z-index: 1;
      box-shadow: 0 8px 20px rgba(0, 188, 212, 0.2);
    }

    .login-card h2 {
      text-align: center;
      color: #00bcd4;
      margin-bottom: 25px;
    }

    .login-card input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      background: transparent;
      border: 1px solid #00bcd4;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
    }

    .login-card input:focus {
      outline: none;
      box-shadow: 0 0 8px #00bcd4;
    }

    .login-card button {
      width: 100%;
      padding: 12px;
      background: #00bcd4;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
      color: #081a2f;
      margin-top: 10px;
    }

    .login-card button:hover {
      transform: scale(1.05);
      background: #26c6da;
    }

    .login-card a {
      display: block;
      text-align: center;
      text-decoration: none;
    }

    .register-link {
      margin-top: 18px;
      color: #00ffff;
      font-size: 18px;
      text-shadow: 0 0 5px rgba(0, 255, 255, 0.3);
    }

    .register-link:hover {
      text-decoration: underline;
      color: #1be8e8;
    }

    .forgot-link {
      font-size: 14px;
      margin-top: 14px;
      color: #ffc107;
      text-shadow: 0 0 4px rgba(255, 193, 7, 0.3);
    }

    .forgot-link:hover {
      text-decoration: underline;
      color: #ffdd57;
    }

    .admin-link {
      font-size: 14px;
      margin-top: 10px;
      color: #26c6da;
      text-shadow: 0 0 4px rgba(38, 198, 218, 0.5);
    }

    .admin-link:hover {
      text-decoration: underline;
      color: #33e1f3;
    }

    .login-card::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #00bcd4, #ff30ff, #00bcd4);
      background-size: 400%;
      z-index: -2;
      filter: blur(1px);
      animation: animate-border 6s linear infinite;
      border-radius: 20px;
    }

    .login-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #07182E;
      border-radius: 20px;
      z-index: -1;
    }

    @keyframes animate-border {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 100% 50%;
      }
    }

    .brand-header {
      position: absolute;
      top: 40px;
      text-align: center;
      width: 100%;
    }

    .brand-header h1 {
      color: #00bcd4;
      font-size: 36px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-shadow: 0 2px 6px rgba(0, 188, 212, 0.2);
    }

    .brand-header p {
      margin-top: 6px;
      font-size: 18px;
      color: #cccccc;
      font-weight: 400;
      letter-spacing: 0.5px;
    }
  </style>
</head>
<body>

  <div class="brand-header">
    <h1>📚 NoteNest</h1>
    <p>Empowering learners through notes & community</p>
  </div>

  <div class="login-card">
    <h2><i class="fas fa-user-circle"></i> Login</h2>
   
      <form method="POST" action="{{ route('login') }}">
      @csrf
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>

    <a href="/register" class="register-link">Don’t have an account? Register</a>

    <!-- Forgot Password Link (above admin) -->
    <a 
      href="https://mail.google.com/mail/?view=cm&fs=1&to=adityaranacode@gmail.com&su=Forgot%20Password%20Help&body=Hi%20NoteNest%20Admin,%0A%0AI%20forgot%20my%20password.%0AName:%20%0AEmail:%20%0A%0APlease%20help%20me%20reset%20it.%0A%0AThanks."
      class="forgot-link"
      target="_blank"
    >
      Forgot Password?
    </a>

    <!-- Admin Panel Link (bottom) -->
    <a href="{{ url('adminlogin') }}" class="admin-link" target="blank">🔐 Admin Panel Login</a>
  </div>

</body>
</html>
