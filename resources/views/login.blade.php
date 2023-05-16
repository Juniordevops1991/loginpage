<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <meta chartset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container bg-light py-3 mt-5">
<div class="row justify-content-center align-items-center">
<div class="col-sm-4"></div>
<div class="col-sm-4">
    <h2><center>LOGIN</center></h2>
    <form action="{{route('submit.login')}}" method="POST">
    @csrf 

    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
    </div>
    @endif 

    <div class="form-outline mb-2 mt-2">
        <input type="email" id="email" class="form-control" name="email" placeholder="Email">
    </div>

    <div class="form-outline mb-2 mt-2">
        <input type="password" id="password" class="form-control" name="password" placeholder="Password">
    </div>

    <div class="mt-2">
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
    
    </form>
    </div>
    <div class="col-sm-4"></div>
    </div>
    </div>

</body>
</html>