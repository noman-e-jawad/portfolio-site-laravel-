@extends('templates.default')

@section('page-content')
    <section class="pb-0 pt-15 w-full md:flex-row lg:flex-row flex-col h-screen"data-scroll-section>
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
        <div class=" flex justify-center items-center lg:gap-5 w-full gap-3 flex-wrap lg:flex-nowrap "id="expertise">
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
        <div class="flex flex-wrap gap-7 justify-between lg:gap-12 albam-archive">
            <div class="albam-row">


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
            </div>
            <div class="albam-row">


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
    <section class="pb-11" data-scroll-section>
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
@endsection
