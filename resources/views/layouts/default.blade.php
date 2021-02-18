<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="/">Chlingo</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/">Find a Tutor</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Message</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Become a Tutor</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Login</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">Signup</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
