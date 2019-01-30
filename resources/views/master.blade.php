<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel_Board</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  @yield('style')
</head>
<body>
<center>
  @include('header')

  @yield('content')

</center>
</body>
  @yield('script')
</html>