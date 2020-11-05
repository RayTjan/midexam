<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#" class=""><strong>Info</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('animal.index')}}">Animal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('habitat.index')}}">Habitat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">Habitat</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid nothing">
  @yield('contentfill')
</div>


</body>

</html>