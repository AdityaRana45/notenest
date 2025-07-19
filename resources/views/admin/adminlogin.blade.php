

<body style="margin: 0; padding: 0; background: linear-gradient(to right, #1a1a2e, #16213e, #0f3460); min-height: 100vh;">
<div style="max-width: 350px; margin: 60px auto; padding: 20px; background: #16213e; color: #fff; border-radius: 10px; font-family: sans-serif;">
    <h2 style="text-align: center; margin-bottom: 20px;">Admin Login</h2>

    @if(session('error'))
        <p style="color: red; text-align: center;">{{ session('error') }}</p>
    @endif

    <form method="post" action="admincheck">
        @csrf
        <input type="text" name="name" placeholder="Admin Username"
               style="width: 100%; padding: 10px; margin-bottom: 15px; border: none; border-radius: 5px; font-size: 16px;">
        <input type="password" name="password" placeholder="Password"
               style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-radius: 5px; font-size: 16px;">
        <button type="submit"
                style="width: 100%; padding: 10px; background: #0f3460; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
            Login
        </button>
    </form>

</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>