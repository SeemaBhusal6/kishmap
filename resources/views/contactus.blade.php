@extends('layouts.master')
@section('content')
<section>
<div class="text-white text-center bg-black flex items-center justify-center  w-full h-72">
            
            <div>
                <p class="uppercase text-4xl font-bold mt-2 hover:bg-green-600">Contact-KIHM </p>
                <P class="">You Are Currently Here!<i class="ri-arrow-right-s-line font-bold"></i><a href="/" class="hover:bg-green-600">Home</a></P>
        </div>
    </div>
    <div class="p-10">
            <h1 class="text-center font-bold text-3xl">Connect With US</h1>
        <p class="text-center">Have you any problem, please contact us via message</p>
    </div>
        
    <div class="grid grid-cols-2 p-10">
        <form action="">
        <div>
                        <label for="name">Name<span class="text-indigo-500"></span></label>
                    <input type="text"placeholder="Enter the name" class="block w-full border border-gray-500 p-2 rounded outline-indigo-500 ">
                    </div>
                    <div>
                        <label for="">Email<span class="text-indigo-500"></span></label>
                    <input type="text"placeholder="Enter the email" class="block w-full border border-gray-500 p-2 rounded outline-indigo-500 ">
                    </div>
                    <div>
                        <label for="">Subject<span class="text-indigo-500"></span></label>
                    <input type="text"placeholder="Enter the subject" class="block w-full border border-gray-500 p-2 rounded outline-indigo-500 ">
                    </div>
                
                
                <div class="mt-4">
                    <label for="">Message<span class="text-indigo-500"></span></label>
                    <textarea name="" id="" cols="94" rows="10" placeholder="Message" class="block  border border-gray-500 p-2 rounded outline-indigo-500"></textarea>
                </div>
                <div class="text-center mt-6 ">
                    <a class="bg-black rounded-lg px-14 py-4 mx-1 text-white hover:bg-blue-300" href="">Send Message</a>
                </div>

        </form>
        <!-- <div class="flex items-center gap-x-3 ">
             <p><i class="ri-phone-fill text-4xl mt-20"></i>078590803, 9857048003, 9857048004</p>
            <h1><i class="ri-mail-open-fill text-4xl mt-6"></i>kishm2077@gmail.com</h1>
            <h1><i class="ri-map-pin-2-fill text-4xl"></i>Kawasoti-2, B.P Chowk, Nawalpur</h1>  -->
            <div>

            <div class="flex items-center gap-x-3 mt-6 p-4">
                        <div
                            class="bg-[#df6527] text-white hover:bg-[#004b1b] duration-1000  w-10 h-10 rounded-full flex items-center justify-center">
                            <i class="ri-phone-fill text-2xl"></i>
                        </div>
                        <div>
                            <h2 class="font-bold text-[#3c3636] uppercase">Phone</h2>
                            <p class="text-gray-500">
                            078590803, 9857048003, 9857048004
                            </p>
                        </div>
                        
                    </div>

                    <div class="flex items-center gap-x-3 mt-6 p-2">
                        <div
                            class="bg-[#df6527] text-white hover:bg-[#004b1b] duration-1000 transition-all ease-in-out w-10 h-10 rounded-full flex items-center justify-center">
                            <i class="ri-mail-fill text-2xl"></i>
                        </div>
                        <div>
                            <h2 class="font-bold text-[#3c3636] uppercase">Email</h2>
                            <p class="text-gray-500">
                            kishm2077@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-x-3 mt-6 p-4">
                        <div
                            class="bg-[#df6527] text-white hover:bg-[#004b1b] duration-1000 transition-all ease-in-out w-10 h-10 rounded-full flex items-center justify-center">
                            <i class="ri-map-pin-fill text-2xl"></i>
                        </div>
                        <div>
                            <h2 class="font-bold text-[#3c3636] uppercase">Address</h2>
                            <p class="text-gray-500">
                            Kawasoti-2, B.P Chowk, Nawalpur
                            </p>
                        </div>
                    </div>
                    
                    </div>
                          
                    
                    

    </div>
    <div class="">
    <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.310233565005!2d84.12321337497288!3d27.645871828201017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399451dfcddebfe5%3A0x89aaf560329d93d0!2sKawasoti%20Institute%20of%20Hospitality%20Management!5e0!3m2!1sen!2snp!4v1708077088514!5m2!1sen!2snp" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        
    
    </section>
    
@endsection