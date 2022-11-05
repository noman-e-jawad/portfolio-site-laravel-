<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shuvro </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/locomotive.min.css') }}" rel="stylesheet" />

</head>

<body class=" bg-primary-black  mx-auto lg:max-w-[1140px]" data-scroll-container>
    <header data-scroll-section
        class="py-2 flex justify-between items-center max-h-20 absolute top-0 lg:min-w-[1140px] md:min-w-[920px] sm:min-w-full z-10">
        <img src="{{ asset('img/shuvro-logo.png') }}" alt="Logo" class="h-16 w-16">
        <nav class="navbar">
            <ul class="list-none flex justify-center items-center gap-10 text-light-white font-text text-base">
                <li> Home </li>
                <li> Projects </li>
                <li> Contact </li>
            </ul>
        </nav>
    </header>
    <main id="main-body" data-scroll-section>
        @yield('page-content')
    </main>
    <footer class="min-h-[100px]  flex justify-between items-center px-5 bg-primary-background" data-scroll-section>
        <img src="{{ asset('img/shuvro-logo.png') }}" class="h-16 w-16">
        <ul class="flex justify-center gap-8 items-center">
            <li>
                <a href="#">
                    <i class="icon fill-dark-red">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path
                                d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                            </path>
                        </svg></i> </a>
            </li>
            <li> <a href="#"> <i class="icon fill-dark-red"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24">
                            <circle cx="4.983" cy="5.009" r="2.188">
                            </circle>
                            <path
                                d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z">
                            </path>
                        </svg></i> </a></li>
            <li> <a href="#"> <i class="icon fill-dark-red"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24">
                            <path
                                d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z">
                            </path>
                        </svg></i> </a></li>
        </ul>
        <p> Created by
            <span class="text-primary-red"> Noman </span>
        </p>

    </footer>
    <script src={{ asset('js/locomotive.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
</body>

</html>
