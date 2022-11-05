<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="bg-primary-black flex justify-center items-center mx-auto h-screen">
    <section class="flex flex-col align-middle w-[500px] bg-primary-background">
        <div class="py-4 bg-primary-red w-full text-center">
            <h3 class="text-white">Login Form</h3>
        </div>
        <div class="flex flex-col px-3 w-full">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Holy smokes!</strong>
                    <br>
                    {{ implode('', $errors->all(':message')) }}
                </div>
            @endif
            <form action="{{ asset('admin') }}" method="post" class="flex flex-col">
                @csrf
                <div class="py-3 flex w-full">
                    <i class="w-10 h-10 bg-primary-black flex justify-center items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-primary-red">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg></i>
                    <input type="text" name="username">
                </div>
                <div class="py-3 flex">
                    <i class="w-10 h-10 bg-primary-black flex justify-center items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-primary-red">
                            <path
                                d="M20 12c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7z">
                            </path>
                        </svg></i>
                    <input type="password" name="password">
                </div>
                <a href="" class="text-primary-red">Forgot Password</a>
                <button class="max-w-[200px]"><input type="submit" value="" name="login">Login</button>
            </form>
            <p>Not a Member? <span class="text-primary-red">Signup now</span></p>
        </div>
    </section>
</body>

</html>
