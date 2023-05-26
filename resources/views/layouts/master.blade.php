<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

@include('layouts.navbar')

<div class="container mt-3">

<!-- Commencement du contenu -->
@yield('contenu')
<!-- fin contenu -->


</div>

</body>
</html>
