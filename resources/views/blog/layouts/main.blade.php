<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Blog</title>
    <link href="{{ asset('/css/app.css')}}" rel="stylesheet">
    <style>
        main{
            height: calc(90vh - 10vh);
        }
        footer{
            height: 10vh;
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
</body>
</html>