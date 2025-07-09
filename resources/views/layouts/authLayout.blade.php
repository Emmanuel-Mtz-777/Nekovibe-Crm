<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="w-full min-h-[100dvh] flex relative items-center justify-center bg-gradient-to-r from-slate-900 to-slate-700">
    <header>
        <nav class="w-full h-14 absolute top-0 left-0 flex items-center px-10">
            <a href="" class=" px-4 py-2 text-white border border-white rounded-lg transition duration-500 hover:bg-white hover:text-black">Ir a la tienda</a>
        </nav>
    </header>
    @yield('content')
</body>
</html>