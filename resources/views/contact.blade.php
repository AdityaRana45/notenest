<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - NoteNest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<x-layout/>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 20px;
      color: #fff;
    }

    .container {
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 16px;
      padding: 40px;
      max-width: 900px;
      width: 100%;
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.15);
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    h1 {
      font-size: 30px;
      color: #00ffff;
      text-align: center;
    }

    .info {
      font-size: 16px;
      color: #ccc;
      line-height: 1.7;
      text-align: center;
    }

    .highlight {
      color: #0ff;
      font-weight: bold;
    }

    .email {
      text-align: center;
      font-size: 15px;
    }

    .email a {
      color: #0ff;
      text-decoration: none;
    }

    .email a:hover {
      text-decoration: underline;
    }

    .social-links {
      margin-top: 10px;
      display: flex;
      justify-content: center;
      gap: 20px;
      overflow-x: auto;
      padding-bottom: 10px;
      scrollbar-width: none;
    }

    .social-links::-webkit-scrollbar {
      display: none;
    }

    .icon-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #2b2b2b;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 22px;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 0 5px rgba(255, 255, 255, 0.2);
      flex-shrink: 0;
    }

    .icon-btn:hover {
      transform: scale(1.15);
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.4);
    }

    .icon-btn.instagram { color: #E1306C; }
    .icon-btn.facebook  { color: #1877F2; }
    .icon-btn.twitter   { color: #1DA1F2; }
    .icon-btn.email     { color: #EA4335; }

    @media (max-width: 500px) {
      h1 {
        font-size: 24px;
      }

      .info {
        font-size: 14px;
      }

      .icon-btn {
        width: 44px;
        height: 44px;
        font-size: 18px;
      }

      .container {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>

    <p class="info">
      Welcome to <span class="highlight">NoteNest</span> — where we provide free PDF practice sets for
      <span class="highlight">Army, SSC</span>, and other competitive exams as well as
      <span class="highlight">academic notes</span>.
    </p>

    <p class="info">
      If you have notes or resources and want to help others, <span class="highlight">share your notes with us!</span><br>
      We will upload your notes with proper credit to help thousands of students.
    </p>

    <div class="email">
      📧 Email us at: <a href="mailto:adityaranacode@gmail.com">adityaranacode@gmail.com</a>
    </div>

    <div class="social-links">
      <a href="https://instagram.com/adityarana.45" target="_blank" class="icon-btn instagram" title="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://facebook.com" target="_blank" class="icon-btn facebook" title="Facebook">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://x.com/AdityaR98447475" target="_blank" class="icon-btn twitter" title="X (Twitter)">
  <i class="fab fa-x-twitter"></i>
</a>
<a href="https://mail.google.com/mail/?view=cm&fs=1&to=adityaranacode@gmail.com&su=Note%20Sharing%20Request&body=Hi,%0AI%20want%20to%20share%20my%20notes%20with%20NoteNest.%20Please%20guide%20me."
   target="_blank"
   class="icon-btn email"
   title="Email">
  <i class="fas fa-envelope"></i>
</a>
    </div>
  </div>
</body>
</html>
