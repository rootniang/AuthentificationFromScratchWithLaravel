<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome-4.7.0/css/font-awesome.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-5.1.3-dist/css/bootstrap.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css'); }}">
    
</head>
<body>

  <a href="#" onclick="document.getElementById('logout-form').submit()">
    <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
    Se deconnecter
  </a>
  <div class="container">
    <h1>Welcome to admin</h1>
  </div>

  <script src="{{ URL::asset('js/jquery.js'); }}"></script>
  <script src="{{ URL::asset('js/admin.js'); }}"></script>
  <script src="{{ URL::asset('css/bootstrap-5.1.3-dist/js/bootstrap.js'); }}"></script>
    
</body>
</html>