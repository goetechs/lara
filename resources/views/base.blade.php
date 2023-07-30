<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name') )</title>

</head>
<body>

    @yield('content')

    {{ config('profil.slogan') }}

<footer>
    <p>&copy; Copyright in 2023  </p>
</footer>
       
</body>
</html>
