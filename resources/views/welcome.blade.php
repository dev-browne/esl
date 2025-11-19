<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark custom-bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Easement Solutions</a>
  </div>
</nav>

<div class = px-3>
  
  <form action="{{ route('logout') }}" method="post">
    @CSRF
  <button style="btn btn-success"> Logout </button> 
  </form>

</div>
    @vite(['resources/css/app.css','resources/js/app.js','resources/css/custom.css'])
</body>
</html>
