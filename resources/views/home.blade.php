<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Notenest</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('notenest_favicon.ico') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>
<x-layout/>
</head>
<body>
@include('header')

@include('content')


@include('footer')



</body>
</html>