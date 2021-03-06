<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title') - Meeting Academy</title>
</head>

<body>


    <nav class="bg-neutral-900 px-6 py-6 text-orange-600 shadow-lg relative">
        <div class="max-w-6xl mx-auto ">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div class="flex items-center">
                        <!-- Website Logo -->
                        <a href="{{ route('home.index') }}"
                            class="sm:text-lg hover:text-orange-900 lg:text-2xl font-bold">MEETING
                            ACÁDEMY</a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1 ">
                        <a href="{{ route('home.index') }}"
                            class="p-2 font-semibold  text-gray-500  hover:text-orange-600 border-b-4 border-neutral-900 hover:border-orange-600  transition duration-300">Home</a>
                        @if (auth()->check())
                            @if (auth()->user()->role === 'admin')
                                <a href="{{ route('table') }}"
                                    class="p-2 font-semibold text-gray-500  hover:text-orange-600 border-b-4 border-neutral-900 hover:border-orange-600  transition duration-300">Administrar</a>
                            @else
                                <a href="{{ route('profile.index') }}"
                                    class="p-2 font-semibold text-gray-500  hover:text-orange-600 border-b-4 border-neutral-900 hover:border-orange-600  transition duration-300">Perfil</a>
                            @endif

                        @endif
                    </div>
                </div>
                <!-- Secondary Navbar items -->


                <div class="hidden  md:flex items-center space-x-3 ">

                    @if (auth()->check())
                        <p class="text-xl "><i class="fa fa-user-circle"></i> <b>{{ auth()->user()->name }}</b>
                        </p>
                        <a href="{{ route('login.destroy') }}"
                            class="font-semibold text-gray-500 rounded-md hover:text-neutral-900 hover:bg-orange-600 hover:rounded-md py-3 px-4">Cerrar
                            Sesión</a>
                    @else
                        <a href="{{ route('register.index') }}"
                            class="font-semibold hover:text-neutral-900 hover:bg-orange-600 hover:rounded-md py-3 px-4">Registro</a>
                        <a href="{{ route('login.index') }}"
                            class="font-semibold hover:text-neutral-900 hover:bg-orange-600 hover:rounded-md py-3 px-4">Ingresar</a>
                    @endif
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-orange-600 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden absolute  md:hidden mobile-menu mt-4 z-20 bg-neutral-900 w-full left-0">
            <ul class="px-4 ">
                <li class="active"><a href="{{ route('home.index') }}"
                        class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900 font-bold transition duration-300">Home</a>
                </li>

                @if (auth()->check())
                    @if (auth()->user()->role === 'admin')
                        <li><a href="{{ route('table') }}"
                                class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900 font-bold transition duration-300">Administrar</a>
                        </li>
                    @else
                        <li><a href="{{ route('profile.index') }}"
                                class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900 font-bold transition duration-300">Perfil</a>
                        </li>
                    @endif

                @endif


                @if (auth()->check())
                    <li class="flex justify-between items-center">
                        <p class="text-xl "><i class="fa fa-user-circle"></i> <b>{{ auth()->user()->name }}</b>
                        </p>
                        <a href="{{ route('login.destroy') }}"
                            class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900  font-bold transition duration-300">Cerrar
                            sesion</a>
                    </li>
                @else
                    <li><a href="{{ route('register.index') }}"
                            class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900  font-bold transition duration-300">Registro
                        </a>
                    </li>
                    <li><a href="{{ route('login.index') }}"
                            class="block text-sm px-2 py-4 text-gray-500 hover:bg-orange-600 hover:text-neutral-900  font-bold transition duration-300">Ingresar
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>





    @yield('content') 
    <x-footer />

</body>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slider.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

</html>
