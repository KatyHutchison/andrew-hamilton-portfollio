<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andrew Hamilton Design</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">

</head>

<body>
    @include("partials.header")
    @yield("content")

</body>
</html>
