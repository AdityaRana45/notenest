<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>NoteNest Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Font Awesome for icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
 <x-layout/> <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column; /* stack top text and form vertically */
      align-items: center;
      color: white;
      padding: 40px 20px 20px; /* top padding for heading */
    }

    .welcome-text {
      text-align: center;
      margin-bottom: 30px;
      max-width: 400px;
    }
    .welcome-text h1 {
      color: #00bcd4;
      font-size: 34px;
      letter-spacing: 1px;
      font-weight: 600;
    }
    .welcome-text p {
      color: #b2ebf2;
      font-size: 16px;
      margin-top: 5px;
    }

    .auth-card {
      width: 350px;
      max-width: 90vw;
      padding: 40px 30px;
      background: #07182e;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 188, 212, 0.2);
    }

    .auth-card h2 {
      text-align: center;
      color: #00bcd4;
      margin-bottom: 25px;
      font-weight: 600;
    }

    .auth-card input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      background: transparent;
      border: 1px solid #00bcd4;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
    }

    .auth-card input:focus {
      outline: none;
      box-shadow: 0 0 8px #00bcd4;
    }

    input:-webkit-autofill {
      box-shadow: 0 0 0 30px #07182e inset !important;
      -webkit-text-fill-color: white !important;
    }

    .auth-card button {
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

    .auth-card button:hover {
      transform: scale(1.05);
      background: #26c6da;
    }

    .auth-card a {
      display: block;
      text-align: center;
      margin-top: 18px;
      color: #00bcd1;
      text-decoration: none;
      font-size: 24px;
    }

    .auth-card a:hover {
      text-decoration: underline;
    }

    /* Responsive tweaks */
    @media (max-width: 400px) {
      .welcome-text h1 {
        font-size: 28px;
      }
      .welcome-text p {
        font-size: 14px;
      }
      .auth-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="welcome-text">
    <h1>📚 Welcome to NoteNest</h1>
    <p>Learn, share, and grow together with the NoteNest community.</p>
  </div>

  <div class="auth-card">
    <h2><i class="fas fa-user-plus"></i> Register</h2>
    <form method="POST" action="/register">
      @csrf
      <input type="text" name="name" placeholder="Name" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Register</button>
    </form>
    <a href="/login">Already have an account? Login</a>
  </div>

</body>
</html>
