<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    {{-- <h1>Selamat datang {{ Auth::guard('employee')->name }}</h1> --}}
    @if (Str::length(Auth::guard('employee')->user()) > 0)
        <h1>Selamat Datang {{ Auth::guard('employee')->user()->name }}</h1>
    @elseif ( Str::length(Auth::guard('user')->user()) > 0 )
        <h1>Selamat Datang {{ Auth::guard('user')->user()->name }}</h1>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>