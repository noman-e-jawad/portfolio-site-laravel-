<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shuvro Sarkar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/locomotive.min.css') }}" rel="stylesheet" />

</head>

<body class="bg-primary-black  mx-auto lg:max-w-[1140px]" data-scroll-section>
    <header data - scroll - section
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
    <main id="main-body">


        <section class="pb-0 pt-15 w-full md:flex-row lg:flex-row flex-col h-screen" data-scroll-section>
            <div class="lg:w-[39%] w-3/4">
                <img src="{{ asset('img/women.jpg') }}" alt="Shuvro" id="chinese">
            </div>
            <div class="lg:w-[61%] ml-4 p-4 lg:p-0 lg:gap-3 gap-4 flex flex-col items-start" id="banner-intro">
                <h3 class="text-primary-red">
                    Hello I'm Shuvro</h3>
                <h1> Visual Designer </h1>
                <p class="lg:pr-14">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua.Ut enim ad minim veniam. </p>
                <div class="button">
                    <button class="mr-4"> About Me </button>
                    <button>Contact Me</button>
                </div>
            </div>
        </section>
        <section class="flex-col gap-32 half-bg w-full " data-scroll-section>
            <div
                class=" flex justify-center items-center lg:gap-5 w-full gap-3 flex-wrap lg:flex-nowrap "id="expertise">
                <div
                    class="p-10 bg-primary-background lg:w-1/3 md:w-1/3 flex gap-3 flex-col items-start w-[calc(50%-theme('gap.3'))] icon-box">
                    <img src="{{ asset('img/Pentablet.png') }}" width="60" height="60">
                    <h3>
                        UI Design
                    </h3>
                    <p class="text-light-white">
                        Lorem Ipsum is simply text of the printing type.
                    </p>
                    <button class="bg-transparent shadow-none text-light-red font-semibold text-lg p-3">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
                <div
                    class="p-10 bg-dark-red lg:w-1/3 flex gap-3 flex-col items-start md:w-1/3 w-[calc(50%-theme('gap.3'))] icon-box">
                    <img src="{{ asset('img/Clipboard-Writing.png') }}" width="60" height="60">
                    <h3>
                        UI Design
                    </h3>
                    <p class="text-light-white">
                        Lorem Ipsum is simply text of the printing type.
                    </p>
                    <button class="bg-transparent shadow-none font-semibold text-lg p-3">
                        KNOW
                        MORE
                        <i class="icon right-arrow-white">
                        </i>
                    </button>
                </div>
                <div
                    class="p-10 bg-primary-background lg:w-1/3 flex  gap-3 flex-col items-start md:w-1/3 w-[calc(50%-theme('gap.3'))] icon-box">
                    <img src="{{ asset('img/Pencil-ruler.png') }}" width="60" height="60">
                    <h3>
                        UI Design
                    </h3>
                    <p class="text-light-white">
                        Lorem Ipsum is simply text of the printing type.
                    </p>
                    <button class="bg-transparent shadow-none text-light-red font-semibold text-lg p-3">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
            </div>
            <div class=" flex justify-center items-center w-full">
                <div class="m-2 w-1/3 flex flex-col justify-between items-center">
                    <h1 class="text-light-red text-8xl mb-3">
                        Tools
                    </h1>
                    <h3>
                        i use every day
                    </h3>
                </div>
                <div class="m-2 w-2/3 flex gap-4 flex-wrap justify-center items-center">
                    <div class="box">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('img/wordpress.png') }}" alt="Wordpress" width="60" height="60">
                            <img src="{{ asset('img/Elementor.png') }}" alt="Elementor" width="60" height="60">
                            <img src="{{ asset('img/php.png') }}" alt="Elementor" width="60" height="60">
                        </div>
                        <p>
                            Clients
                        </p>
                    </div>
                    <div class="box ">
                        <h3 class="text-light-red text-4xl">
                            122
                            +
                        </h3>
                        <p>
                            Completed Projects
                        </p>
                    </div>
                    <div class="box">
                        <h3 class="text-light-red text-4xl">
                            08
                        </h3>
                        <p>
                            Years
                            Experience
                        </p>
                    </div>
                    <div class="box">
                        <h3 class="text-light-red text-4xl">
                            10
                        </h3>
                        <p>
                            Achievements
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-col gap-10" data-scroll-section>
            <div class="w-full flex justify-between items-center px-3 lg:p-0">
                <div class="w-4/6">
                    <h3>
                        FEATURED
                        PROJECTS
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing eli
                    </p>
                </div>
                <button class="w-2/6">
                    VIEW
                    ALL
                </button>
            </div>
            <div class="flex flex-wrap gap-7 justify-between lg:gap-12">
                <div class="image-box">
                    <img src="{{ asset('img/2-1024x853.jpg') }}" alt="">
                    <h3 class="mt-3">
                        The
                        Vintage
                    </h3>
                    <button class="bg-transparent shadow-none mt-0 text-light-red font-semibold text-lg p-0">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
                <div class="image-box">
                    <img src="{{ asset('img/3-1024x853.jpg') }}" alt="">
                    <h3 class="mt-3">
                        The
                        Vintage
                    </h3>
                    <button class="bg-transparent shadow-none text-light-red font-semibold text-lg p-0 mt-0">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
                <div class="image-box">
                    <img src="{{ asset('img/4-1024x853.jpg') }}" alt="">
                    <h3 class="mt-3">
                        The
                        Vintage
                    </h3>
                    <button class="bg-transparent shadow-none text-light-red font-semibold text-lg p-0 mt-0">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
                <div class="image-box">
                    <img src="{{ asset('img/5-1024x853.jpg') }}" alt="">
                    <h3 class="mt-3">
                        The
                        Vintage
                    </h3>
                    <button class="bg-transparent shadow-none text-light-red font-semibold text-lg p-0 mt-0">
                        KNOW
                        MORE
                        <i class="icon right-arrow">
                        </i>
                    </button>
                </div>
            </div>
        </section>
        <section class="lg:p-20 bg-primary-background justify-between p-10 half-height-bg" data-scroll-section>
            <div class="w-9/12">
                <h2>
                    LET’ S WORK TOGETHER ON YOUR NEXT PROJECT
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                </p>
            </div>
            <button>
                Contact
            </button>
        </section>
        <section class="pb-11">
            <ul class="list-none flex justify-center items-center gap-10 text-light-white font-text text-base w-full">
                <li>
                    Home
                </li>
                <li>
                    Projects
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </section>
    </main>
    <footer class="min-h-[100px]  flex justify-between items-center relative px-5 bg-primary-background"
        data-scroll-section>
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
