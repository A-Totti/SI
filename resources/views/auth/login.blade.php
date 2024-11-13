<x-guest-layout>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
</head>
 
<body class="h-screen w-screen bg-gradient-to-r from-blue-500 to-purple-500 dark:bg-gray-900">
    
    <div class="flex items-center justify-center h-full">
        <div class="w-full max-w-md bg-blue-100 rounded-xl shadow-lg dark:border md:mt-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-8 space-y-6">
                
                <h2 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                    Sign in to your account
                </h2>
                <form class="space-y-4" method="post" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3
                         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                         dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3
                         dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                         dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('password.email') }}" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                    </div>
                    <button type="submit" 
                    class="flex w-full justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-md
                     hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                      focus-visible:outline-blue-600 transition duration-200 ease-in-out">  {{ __('Log in') }}</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                        Don’t have an account yet? <a href="{{ route('register') }}" 
                        class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</x-guest-layout>