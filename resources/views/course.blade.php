@extends('layouts.master')
@section('content')
<section>
        <div class="text-white text-center bg-black flex items-center justify-center  h-96">
            <div>
                <p class="uppercase text-4xl font-bold mt-2 hover:bg-green-600">Courses-KIHM </p>
                <P class="">You Are Currently Here!<i class="ri-arrow-right-s-line font-bold"></i><a href="/" class="hover:bg-green-600">Home</a></P>
        </div>
    </div>
    </section>
    <section class="my-20">
        <h1 class="text-3xl text-center text-green-700 font-bold">Explore Popular Courses</h1>
        <p class="text-center text-green-600 py-2">We provide the following courses as per the need of the students.</p>
        <div class="mt-5 grid lg:grid-cols-4 md:grid-cols-2 lg:px-24 py-10 gap-10">
            <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
               <img src="https://kihm.com.np/wp-content/uploads/2023/05/5.png" class="rounded-t-lg" alt="">
               <div class="p-4">
                <h2 class="font-bold cursor-pointer hover:text-blue-400"> Barista</h2>
                </div>
            </div>
            
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                 <img src="https://kihm.com.np/wp-content/uploads/2023/05/6.png" class="rounded-t-lg" alt="">
                 <div class="p-4">
                    <h2 class="font-bold  cursor-pointer hover:text-blue-400">PDHM</h2>
                    
                   </div>
                </div>
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                    <img src="https://kihm.com.np/wp-content/uploads/2023/05/4.png" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h2 class="font-bold cursor-pointer hover:text-blue-400">Bartender</h2>
                        
                       </div>
                </div>
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                    <img src="https://kihm.com.np/wp-content/uploads/2023/05/3.png" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h2 class="font-bold cursor-pointer hover:text-blue-400">Waiter</h2>
                        
                       </div>
                </div>
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                    <img src="https://kihm.com.np/wp-content/uploads/2023/05/1.png" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h2 class="font-bold cursor-pointer hover:text-blue-400">Housekeeping Training</h2>
                        
                       </div>
                </div>
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                    <img src="https://kihm.com.np/wp-content/uploads/2023/05/2.png" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h2 class="font-bold cursor-pointer hover:text-blue-400">Front Desk Management</h2>
                        
                       </div>
                </div>
                <div class="wow animate__animated animate__zoomIn shadow rounded-lg">
                    <img src="https://kihm.com.np/wp-content/uploads/2023/05/7.png" class="rounded-t-lg" alt="">
                    <div class="p-4">
                        <h2 class="font-bold cursor-pointer hover:text-blue-400">Professional Diploma In Culinary Arts</h2>
                        
                       </div>
                </div>
        </div>
    </div>
    </section>
@endsection