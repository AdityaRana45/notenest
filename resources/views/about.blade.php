<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - NoteNest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <x-layout/><style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
  

      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .container {
      max-width: 850px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    h1 {
      font-size: 2.8rem;
      margin-bottom: 20px;
      text-align: center;
      color: #ffffff;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.7;
      color: #ddd;
      margin-bottom: 20px;
    }

    .highlight {
      color: #76e2f0;
      font-weight: 600;
    }

    .contact {
      margin-top: 30px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 20px;
    }

    .footer-icon-link {
      display: inline-block;
      margin: 10px 0;
      color: #76e2f0;
      text-decoration: none;
      font-size: 1.05rem;
    }

    .footer-icon-link i {
      margin-right: 8px;
    }

    .footer-icon-link:hover {
      text-decoration: underline;
      color: #ffffff;
    }

    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }

      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>About NoteNest</h1>
    <p>
      <span class="highlight">NoteNest</span> is a digital platform designed for students and educators to access study notes easily and efficiently.
    </p>
    <p>
      Our goal is to make quality notes accessible for everyone preparing for exams, assignments, or learning new topics. With an intuitive interface and secure system, NoteNest simplifies the way you manage your academic content.
    </p>
    <p>
      Whether you're a student who wants to revise efficiently or someone who wants to contribute notes for others — NoteNest is for you!
    </p>

    <div class="contact">
      <h2>Want to share your notes?</h2>
      <p>Send us your notes and become a contributor!</p>

      <a 
        href="https://mail.google.com/mail/?view=cm&fs=1&to=adityaranacode@gmail.com&su=Note%20Sharing%20Request&body=Hi,%0AI%20want%20to%20share%20my%20notes%20with%20NoteNest.%20Please%20guide%20me." 
        target="_blank" 
        class="footer-icon-link">
        <i class="fas fa-envelope"></i> adityaranacode@gmail.com
      </a>
      <br>
      <a 
        href="https://instagram.com/adityarana.45" 
        target="_blank" 
        class="footer-icon-link">
        <i class="fab fa-instagram"></i> adityarana.45
      </a>
    </div>
  </div>
</body>
</html>
