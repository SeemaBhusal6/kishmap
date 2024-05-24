@extends('layouts.master')
@section('content')
<section>
        <div class="mt-4">
            <div class="grid grid-cols-2 gap-10 ">
                <div class="shadow-lg">
                    <img src="images\sss.jpg" alt="">
    
                </div>
                <div class=" w-full flex items-center justify-center">
                    <div class="w-8/12 mx-auto text-center" >
                        <img src="images\logo.png" class="h-24 mx-auto" alt="">
                        <p class="font-bold text-indego-400 text-2xl mt-2"></p>
                        <form action="" class="mt-4">
                            <input type="text" placeholder="Enter Your Email Address" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 bg-gray-200">
                            <input type="text" placeholder="Enter Your Password" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">
                        </form>
                    
                        
                        <div class="text-center py-8 rounded-lg">
                            <button class="bg-blue-700 p-2 px-16 shadow-lg rounded hover:bg-green-500 transition-all duration-700 text-white ">Login</button>
                       
                        <p class=" text-blue-900">Not registred! <a href="/studentregister" class="text-red-400">Signup now</a></p>
                        
                        
                    </div>
                    </div>
    
            </div>
        </div>
    </section>
    @endsection