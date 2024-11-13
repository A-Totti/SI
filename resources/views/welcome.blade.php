<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
</head>

<body>
    <div>
        <nav class="bg-blue-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 text-white">
                            Sistem Informasi Skripsi
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        @if (Route::has('login'))
                            @auth
                            @else
                                <a href="{{ route('login') }}" class="font-semibold 
                                text-white px-4 py-2 border border-transparent rounded-md
                                 hover:bg-gray-500 focus:outline focus:outline-2 focus:rounded-sm
                                  focus:outline-red-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold
                                     text-white px-4 py-2 border border-transparent rounded-md
                                      hover:bg-gray-500 focus:outline focus:outline-2 focus:rounded-sm
                                       focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div>@yield('contents')</div>
            </div>
        </main>
    </div>

    <section id="" class="">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl"></h2>
                </div>
            </div>
          
               
            </div>
        </div>
    </section>
</body>

</html>
