<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>{{ $page }}</h1>
    <h2> {{ $blog }} </h2>
    @foreach ($users as $key => $value)
      <li> {{ $value }} </li>
    @endforeach
  </body>
</html>
