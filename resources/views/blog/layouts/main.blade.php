<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Blog</title>
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <style>
        .avatar-container {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
    </style>
</head>
<body>
    @include('blog.include.nav')
    <main class="py-5">
        @yield('content')
    </main>
    <footer class="w-100 bg-dark text-center text-white py-4">
        © 2020 Laravel - Blog. All rights reserved. Created by Paul
    </footer>
    <script src="{{ asset('/js/app.js')}}"></script>
    <script src="https://use.fontawesome.com/b4c4382a5e.js"></script>
</body>
</html>