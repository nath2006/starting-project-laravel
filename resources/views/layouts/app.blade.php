<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Laravel CRUD')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Laravel CRUD</a>
  </div>
</nav>

<div class="container mt-4">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @yield('content')
</div>

</body>
</html>
