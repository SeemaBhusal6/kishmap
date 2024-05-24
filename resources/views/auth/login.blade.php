@extends('layouts.master')
@section('content')
    <section>

        <div class="mt-4">
            <div class="grid grid-cols-2 gap-10 ">
                <div class="shadow-lg">
                    <img src="images\sss.jpg" alt="">

                </div>
                <div class=" w-full flex items-center justify-center">
                    <div class="w-8/12 mx-auto text-center">
                        <img src="images\logo.png" class="h-24 mx-auto" alt="">
                        <p class="font-bold text-indego-400 text-2xl mt-2"></p>
                        <form action="{{ route('login') }}" class="mt-4" method="POST">
                            @csrf
                            <input id="email" type="email" placeholder="Enter Your Email Address" name="email"
                                value="" required autocomplete="email"
                                class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 bg-gray-200">
                            <input id="password" type="password" name="password" placeholder="Enter Your Password"
                                class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">



                            <div class="text-center py-8 rounded-lg">
                                <button
                                    type="submit"class="bg-blue-700 p-2 px-16 shadow-lg rounded hover:bg-green-500 transition-all duration-700 text-white ">Login</button>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <p class=" text-blue-900">Not registred! <a href="/register" class="text-red-400">Signup now</a></p>


                    </div>
                </div>

            </div>
        </div>


    </section>
@endsection
