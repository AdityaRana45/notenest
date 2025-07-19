<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NoteNest - Contributors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <x-layout/>
 <style>
    body {
      background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460);
      color: #ffffff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 60px 20px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
    }

    h1 {
      font-size: 2.8rem;
      text-align: center;
      margin-bottom: 40px;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.15);
    }

    .thanks-box {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 16px;
      text-align: center;
      margin-bottom: 50px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      backdrop-filter: blur(4px);
    }

    .thanks-box h2 {
      font-size: 1.8rem;
      color: #76e2f0;
      margin-bottom: 15px;
    }

    .thanks-box p {
      font-size: 1.05rem;
      line-height: 1.6;
      color: #ddd;
    }

    .thanks-box .quote {
      margin-top: 20px;
      font-style: italic;
      color: #bbbbbb;
    }

    .table-wrapper {
      overflow-x: auto;
      background: rgba(255, 255, 255, 0.04);
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.25);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 600px;
    }

    th, td {
      padding: 16px 20px;
      text-align: left;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    th {
      background: rgba(255, 255, 255, 0.08);
      color: #76e2f0;
      font-size: 1.05rem;
    }

    tr:last-child td {
      border-bottom: none;
    }

    tr:hover {
      background: rgba(255, 255, 255, 0.06);
    }

    .insta-link {
      color: #e1306c;
      text-decoration: none;
      font-weight: 500;
    }

    .insta-link:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      body {
        padding: 40px 10px;
      }

      h1 {
        font-size: 2rem;
        margin-bottom: 30px;
      }

      .thanks-box {
        padding: 20px;
      }

      .thanks-box h2 {
        font-size: 1.4rem;
      }

      .thanks-box p, .thanks-box .quote {
        font-size: 0.9rem;
      }

      th, td {
        padding: 12px 16px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    
    <div class="thanks-box">
      <h2>🌟 Special Thanks</h2>
      <p>
        A heartfelt thank you to all our <strong>NoteNest contributors</strong> who generously shared their notes to help other learners grow.
        Your efforts are shaping a better academic future for many. You're not just sharing notes — you're sharing knowledge.
      </p>
      <div class="quote">
        “It is quality rather than quantity that matters.” — Lucius Annaeus Seneca
      </div>
    </div>

    <h1>Our Contributors</h1>

    @if(session('success'))
      <p style="color: #00ff99; text-align: center">{{ session('success') }}</p>
    @endif

    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Subject</th>
            <th>Note Title</th>
            <th>Instagram</th>
          </tr>
        </thead>
        <tbody>
          @foreach($contributors as $contributor)
            <tr>
              <td>{{ $contributor->name }}</td>
              <td>{{ $contributor->subject }}</td>
              <td>{{ $contributor->note_name }}</td>
              <td>
                @if($contributor->instagram_id)
                  <a href="https://instagram.com/{{ $contributor->instagram_id }}" 
                     target="_blank" 
                     class="insta-link">
                    {{ '@' . $contributor->instagram_id }}
                  </a>
                @else
                  —
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</body>
</html>
