<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="./app.css">
    </head>
    <body class="antialiased">
        <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post ?>
        </article>
        <?php endforeach; ?>
        <!-- <script src="./app.js"></script> -->
    </body>
</html>
