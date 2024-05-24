@extends('layouts.master')
@section('content')
<section>
<div class="" >
<div class="grid grid-cols-2 gap-10">
                
                
                <div class=" w-full flex items-center justify-center">
                    <div class="w-8/12 mx-auto text-center" >
                        <img src="images\logo.png" class="h-24 mx-auto" alt="">
                        <p class="font-bold text-indego-400 text-2xl mt-2"></p>
                        <form action="" class="mt-4">
                            <input type="text" name="fullname" placeholder="Enter Your Full Name" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 bg-gray-200">
                            <input type="text" name="address" placeholder="Enter Your Address" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">
                            <input type="text" name="course" placeholder="Enter Your Course" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">
                            <input type="text" name="email" placeholder="Enter Your Email" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">
                            <input type="text" name="password" placeholder="Enter Your Password" class=" py-2 px-1 w-full block rounded-lg border border-blue-400 outline-indego-500 mt-6 bg-gray-200">
                        </form>
                    
                        
                        <div class="text-center py-8 rounded-lg">
                        <p class=" text-blue-900">Have already account!<a href="/studentlogin" class="text-red-400">Login</a></p>
                            <button class="bg-blue-700 p-2 px-16 shadow-lg rounded hover:bg-green-500 transition-all duration-700 text-white ">Register</button>
                       
                        
                        
                        
                    </div>
                    </div>
    
            </div> 
            <div class="shadow-lg">
                    <img src="images\sss.jpg" alt="">
    
                </div>     
</div>
    </section>
    @endsection
   


                
                              
                
             