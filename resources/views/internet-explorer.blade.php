<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Internet Explorer</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="alert alert-danger text-center" role="alert">
                Internet Explorer is not supported!
            </div>
        </div>
    </body>
</html>
