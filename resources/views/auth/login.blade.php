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
        <div class="col-3"></div>
        <div class="col-6">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach 
            <form action="{{ route('authenticate') }}" method="post">
                @csrf 
                <div class="form-group">
                    <label>Adresse mail</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
        </div>
        <div class="col-3"></div>
    </div>
  </div>

  <script src="{{ URL::asset('js/jquery.js'); }}"></script>
  <script src="{{ URL::asset('js/admin.js'); }}"></script>
  <script src="{{ URL::asset('css/bootstrap-5.1.3-dist/js/bootstrap.js'); }}"></script>
    
</body>
</html>