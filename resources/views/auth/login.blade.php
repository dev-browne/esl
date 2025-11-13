<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

  <noscript><h1 style="color: red;">Please enable JavaScript to access the database.</h1></noscript>

  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="username" class="custom-colour">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Username">
    </div>
  <div class="form-group pt-2 pb-3">
      <label for="password" class="custom-colour">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
    <button type="submit" class="btn custom-bg text-light">Login</button>
  </form>

</div>
</div>
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/custom.css'])
</body>
</html>