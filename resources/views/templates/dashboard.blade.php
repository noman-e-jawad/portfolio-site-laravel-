<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashbord</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="dashboard">

    <header class="bg-primary-red h-[50px] flex justify-between items-center px-10">
        <p class="text-white">Dashboard</p>
        <div id="profile" class="flex items-center gap-3">
            <img src="{{ asset('/img/avator.png') }}" alt="avator" class="w-8 h-9">
            <div class="info">
                <p class="text-white">avator</p>
            </div>
        </div>
    </header>
    <main class="flex">
        <div class="w-1/6">
            @include('templates.sidebar')
        </div>
        <div class="w-5/6">
            @yield('content')
        </div>
    </main>
    @method('footer-script')
</body>

</html>
