<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <a href="/">Home</a>
    <a href="/products">Products</a>
    <a href="/contact">Contact</a>
</nav>
<hr>
@yield('content')
<footer>
    <hr>
    <p>Shop - Shinobi</p>
</footer>
</body>
</html>
