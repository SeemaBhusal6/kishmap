<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="flex">
            <div class="w-56 fixed h-screen bg-gray-100 shadow">
                <img src="{{asset('images/onlinelogomaker-021424-1830-4328.png')}}" class="mt-5 w-full justify-center" alt="">
                <div class="mt-4">
                    <a href="{{route('dashboard')}}" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-dashboard-fill"></i> Dashboard</a>
                    <a href="" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-book-open-line"></i>Courses </a>
                    <a href="{{route('notice.index')}}" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-image-2-line"> </i>Notices</a>
                   <a href="{{route('team.index')}}" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-group-line"></i>Team Members</a>
                    <a href="{{route('gallery.index')}}" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-gallery-fill"></i>  Gallery</a>
                    <a href="" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-news-line"> </i> Blogs</a>
                    
                    <a href="" class="p-2 block hover:bg-lime-200 text-lg border-b border-stone-600"><i class="ri-contacts-line"></i>Contacts</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button type="submit" class="p-2 block w-full text-left hover:bg-lime-200  text-lg border-b border-stone-600"> <i class="ri-logout-circle-r-line"></i>logout</button></form>

                </div>
            </div>
            <div class="p-4 flex-1 pl-60 ">
            <h1 class="text-3xl font-bold text-indigo-600">@yield('heading')</h1>
            <hr class="my-2 h-1 bg-red-600">
                @yield('content')
            </div>
        </div>
    </body>
</html>
