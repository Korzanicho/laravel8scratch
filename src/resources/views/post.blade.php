<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="./app.css">
    </head>
    <body class="antialiased">
        <h1>Hello world</h1>

        <article>
            <?= $post ?>
        </article>

				<a href="/">Go back</a>

        <!-- <script src="./app.js"></script> -->
    </body>
</html>
