@extends('layouts.master')
@section('content')
    <section>
        <form action="{{ route('adminlogin') }}" class="mt-4" method="POST">
            @csrf
            <input id="email" type="email" placeholder="Enter Your Email Address" name="email" value="" required
                autocomplete="email"
                class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 bg-gray-200">
            <input id="password" type="password" name="password" placeholder="Enter Your Password"
                class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">



            <div class="text-center py-8 rounded-lg">
                <button
                    type="submit"class="bg-blue-700 p-2 px-16 shadow-lg rounded hover:bg-green-500 transition-all duration-700 text-white ">Login</button>
        </form>
    </section>
@endsection
