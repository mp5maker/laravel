<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practice Blade Inheritance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    @section('head')
        <p>Parent:: I go something to say</p>
    @show

    @yield('body')
</body>
</html>