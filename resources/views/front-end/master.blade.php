<!DOCTYPE html>
<html lang="vi">

<head>
    @include('front-end.link')
</head>

<body>
<header>
    @include('front-end.header')
</header>
<main>
    @yield('main')
</main>
<footer class="bg bg-white">
    @include('front-end.footer')
</footer>
<script src="acess/js/sweetalert.min.js"></script>
</body>

</html>
