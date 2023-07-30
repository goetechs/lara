<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name') )</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">

    
    <main role="main" class="flex flex-col justify-center items-center">

        @yield('content')

    </main>


    <footer class= "text-grey-400">
        
        <p>

            &copy; Copyright {{ date('y') }} 

            @if(!Route::is('apropos'))
            &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href=" {{ route('apropos') }}">A propos</a> 
            @endif
    
        </p>
        

    </footer>
       
</body>
</html>
