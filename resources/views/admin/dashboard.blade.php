<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mobile support -->
    <x-layout/> 
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #1e272e;
            color: #d2dae2;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #2d3436;
            padding: 1rem;
            color: #f5f6fa;
            text-align: center;
            font-size: 1.6rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .dashboard {
            max-width: 700px;
            margin: 50px auto;
            background: #2f3640;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 0 14px rgba(0,0,0,0.4);
        }

        .dashboard h2 {
            text-align: center;
            color: #f1f2f6;
            margin-bottom: 1.5rem;
            font-size: 26px;
        }

        .dashboard a {
            display: block;
            padding: 14px 20px;
            margin: 16px 0;
            text-decoration: none;
            background: #00a8ff;
            color: white;
            border-radius: 6px;
            text-align: center;
            font-weight: 600;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .dashboard a:hover {
            background: #4cd137;
            transform: scale(1.04);
        }

        .quote {
            text-align: center;
            color: #8395a7;
            font-style: italic;
            margin-bottom: 25px;
            font-size: 15px;
        }

        .details-note {
            text-align: center;
            font-size: 14px;
            color: #dcdde1;
            margin-top: -10px;
        }

        @media (max-width: 600px) {
            .dashboard {
                margin: 30px 15px;
                padding: 1.5rem;
            }

            .dashboard a {
                font-size: 15px;
                padding: 12px;
            }

            .dashboard h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        🌙 Admin Panel
    </div>
<h2>Total Users Registered: {{ $total }}</h2>
    <div class="dashboard">
        <div class="quote">
            “It is not the man who has too little, but the man who craves more, that is poor.”<br>— Seneca
        </div>

        <h2>Welcome, Admin 🎯</h2>

        <a href="{{ url('contributorform') }}">➕ Add Contributor</a>

        <a href="{{ url('userdetail') }}">🛠️ Manage Users</a>
        <div class="details-note">Edit | Delete | Change Password | View Details</div>

        <a href="{{ url('admin/logout') }}">🚪 Logout</a>
    </div>

</body>
</html>
