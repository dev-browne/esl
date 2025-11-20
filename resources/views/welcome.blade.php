<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    @vite(['resources/css/custom.css'])
    <title>Welcome</title>
    </head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary custom-bg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Easement Solutions</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">My Files</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Report</a></li>
            <li><a class="dropdown-item" href="#">Report</a></li>
            <li><a class="dropdown-item" href="#">Report</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Adopters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Job Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Change Password</a>
        </li>
        <li class="nav-item">
	<form action="{{ route('logout') }}" method="post">
         @CSRF
         <button class="btn text-light"> Logout </button>
        </form>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <a class="btn custom-btn-bg text-light"type="submit">Search</a>
      </form>
    </div>
  </div>
</nav>

</div>
  
</body>
</html>
