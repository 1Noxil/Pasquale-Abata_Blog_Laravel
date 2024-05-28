<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>BLOG</title>
  </head>
  <body>
    <x-navbar />
    {{$slot}}
  </body>
  <script src="https://kit.fontawesome.com/c3880884f6.js" crossorigin="anonymous"></script>
</html>