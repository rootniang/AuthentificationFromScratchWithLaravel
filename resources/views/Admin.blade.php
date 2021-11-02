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
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <a href="{{ route('home') }}">
                    <img src="" alt="brand">
                </a>
            </div>
            <div class="col-lg-8">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                    </li>
                    @auth
                       <li class="nav-item">
                        <a href="#" onclick="document.getElementById('logout-form').submit()">
                            <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                            Deconnexion
                        </a>
                        </li> 
                    @endauth
                    
                </ul>
            </div>
        </div>
    </div>

  <script src="{{ URL::asset('js/jquery.js'); }}"></script>
  <script src="{{ URL::asset('js/admin.js'); }}"></script>
  <script src="{{ URL::asset('css/bootstrap-5.1.3-dist/js/bootstrap.js'); }}"></script>
    
</body>
</html>