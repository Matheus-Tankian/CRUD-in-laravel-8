<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
   
    @yield('content')

    <div class="row d-flex justify-content-center">
        <a  href="{{url('http://localhost/blog/public/sair')}}" class="btn btn-danger">Sair</a>
    </div>
    
</div>
   
</body>
</html>