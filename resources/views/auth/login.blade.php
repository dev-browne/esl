<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark custom-bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Easement Solutions</a>
  </div>
</nav>

<div class = px-3>
  <h2 class="pt-3 custom-colour" id="login">Login</h2>


  <form action="{{ route('login') }}" method="post">
    @CSRF
    <div class="form-group">
      <label for="name" class="custom-colour">Username</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="name">
    </div>
  <div class="form-group pt-2 pb-3">
      <label for="password" class="custom-colour">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
    <button type="submit" class="btn custom-bg text-light">Register</button>

    @if ($errors->any())
      <ul class="px-4 py-2 mt-2">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-danger">{{ $error }}</li>
        @endforeach
      </ul>
    @endif

  </form>

</div>
</div>
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/custom.css'])
</body>
</html>
