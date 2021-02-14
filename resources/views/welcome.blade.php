<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Welcome</title>

        @include('layouts/parts/ie-check-redirect')

        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}"></script>

    </head>

    <body>
        <div class="container">
            <div class="alert alert-danger text-center" role="alert">
                Welcome Page!
            </div>
        </div>
    </body>
</html>
