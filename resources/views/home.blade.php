<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shuvro Sarkar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="bg-primary-black max-w-[1140px] mx-auto">
    <header class="py-2 flex justify-between items-center max-h-20 absolute top-0 w-[1140px]">
        <img src="{{ asset('img/shuvro-logo.png') }}" alt="Logo" class="h-16 w-16">
        <nav class="navbar">
            <ul class="list-none flex justify-center items-center gap-10 text-light-white font-text text-base">
                <li>Home</li>
                <li>Projects</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>
    <section class="py-0 h-screen w-full">
        <div class="w-[39%]">
            <img src="{{ asset('img/women.jpg') }}" alt="Shuvro">
        </div>
        <div class="w-[61%] ml-4">
            <h3 class="text-primary-red">Hello Im Shuvro</h3>
            <h1 class="my-3">Visual Designer</h1>
            <p class="lg:pr-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam.</p>
            <button>About Me</button>
        </div>
    </section>
</body>

</html>
