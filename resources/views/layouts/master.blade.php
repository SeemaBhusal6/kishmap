<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- wow.jss -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .custom-group:hover .custom {
            display: block;
        }
    </style>
</head>

<body>
    <!-- uparrow -->
    <a id="topbtn" class="cursor-pointer bg-red-900 text-white fixed right-5 bottom-10 p-2 rounded"><i
            class="ri-arrow-up-s-fill text-2xl"></i></a>
    <!-- navbar -->

    <nav class=" md:flex justify-between items-center px-16 shadow-lg py-2 sticky top-0 bg-white z-10 ">
        <img src="images\logo.png" alt="" class="h-20 w-26">
        <div>
            <ul class="lg:flex  justify-center  ">
                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/">Home</a></li>

                <li class="relative group mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold">
                    <a class="p-2">About <i class="ri-arrow-drop-down-line"></i></a>
                    <ul class="absolute hidden group-hover:block w-44  left-0 top-8 bg-gray-100 rounded z-10 ml-6 ">
                        <li class="text-black p-2 hover:bg-gray-200 "><a href="/introduction">Introduction</a>

                        </li>
                        <li class="text-black p-2 hover:bg-gray-200"><a href="/mission">Mission and Vision</a></li>

                    </ul>
                </li>
                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/course">Courses</a></li>
                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/contactus">Contact</a></li>
                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/gallerys">Gallery </a></li>

                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/notices">Notices</a></li>
                <li class="mx-4 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a
                        class="" href="/blog">Blog</a></li>

            </ul>
        </div>
        @if (!auth()->user())
            <a href="/login" class="bg-red-800 text-white px-2 rounded-lg">Students Login</a>
        @else
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if (auth()->user()->role === 'admin')
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>
                        @endif

                        @if (auth()->user()->role === 'user')
                            <x-dropdown-link :href="route('view-profile')">
                                {{ __('View Profile') }}
                            </x-dropdown-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                          this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @endif
    </nav>

    <!-- <nav class=" block lg:hidden flex justify-between items-center px-4 shadow-lg py-2 sticky top-0 bg-white z-10 ">
    <img src="images\onlinelogomaker-021424-1830-4328.png" alt="" class="h-20">
    <i onclick="toggleMenu()" class="ri-menu-line"></i>
    <div>
      <ul class="lg:flex  justify-center  ">
        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/">Home</a></li>

        <li class=" relative group  mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="p-2" href="">About <i class="ri-arrow-drop-down-line"></i></a>
  <ul class="absolute hidden group-hover:block left-0 top-6 bg-gray-100 rounded z-10 ml-4 ">
      <li class="text-black py-2 hover:bg-gray-200 "><a href="/introduction">Introduction</a>
      
      </li>
      <li class="text-black py-2 hover:bg-gray-200"><a href="/mission">Mission and Vision</a></li>
       
  </ul>
</li>

     
        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/course">Courses</a></li>
        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/contact">Contact</a></li>
        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/gallerys">Gallery </a></li>

        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/notices">Notices</a></li>
        <li class="mx-8 py-1 text-slate-400 hover:text-blue-400 hover:border-blue-400 font-bold"><a class="" href="/blog">Blog</a></li>
        <a href="" class="bg-indigo-800 text-white px-2 rounded-lg">Students Login</a>
      </ul>
    </div>
  </nav> -->


    <div>
        @yield('content')
    </div>

    <footer>

        <div class="mt-10 bg-green-600 pb-4 ">
            <div class="grid md:grid-cols-3 gap-5  md:p-16 p-10  md:justify-items-center">

                <div class="px-3 ">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/427707138_407129895168672_9051521221614586505_n.png?stp=dst-png_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=510075&_nc_ohc=XLLxuD97xP8AX8bgkFf&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdT91atSb94IrO2a6qdaAGba50RIyt7M6vZareH7zGBPgw&oe=65F43BEE"
                        alt="" class="h-24  px-auto">
                    <!-- <p class="text-justify text-white text-lg mt-4">Kawasoti Institute of Hospitality Management (KISHM) is the best hospitality institute in Kawasoti that offers diploma in hotel management courses.</p> -->
                    <div class="mt-8">
                        <i class="ri-facebook-circle-fill text-3xl text-white "></i>
                        <i class="ri-instagram-line text-3xl text-white"></i>

                    </div>

                </div>

                <div>
                    <p class="text-white font-bold text-2xl">Contact Us</p><br>
                    <span class="text-gray-300 "><i class="ri-map-pin-fill"></i> Kawasoti-2, B.P Chowk,
                        Nawalpur</span>
                    <span class=" text-gray-300 block mt-3"><i class="ri-phone-fill"></i>078590803, 9857048003,
                        9857048004</span>
                    <span class=" text-gray-300 block mt-3"><i class="ri-mail-download-fill"></i>
                        kishm2077@gmail.com</span>
                </div>
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKISHMkawasoti&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="340" height="200" style="border:none;overflow:hidden" scrolling="no"
                    frameborder="0" allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

            </div>

            <div class=" px-16">
                <hr class="text-white  ">
                <div class="md:flex justify-between py-2 text-white text-lg">
                    <p>Copyright&copy 2024 | Kawasoti Institute of Hospitality Management (KISHM) </p>
                    <p>Powered by <a href="https://bitmapitsolution.com" class="hover:underline" target="_blank">
                            Bitmap IT Solution
                        </a></p>
                </div>
            </div>
        </div>

    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('mynav');
            if (menu.style.display == 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }
    </script>







    <!--swiper  -->
    <script>
        const swiper = new Swiper('.swiper2', {
            direction: 'horizontal',
            loop: true,
            spaceBetween: 300,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',

            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <!-- up arrow -->
    <script>
        var topbtn = document.getElementById('topbtn');
        topbtn.style.display = 'none';
        // alert('hello');
        window.onscroll = function() {
            scrollFunction();
        }

        function scrollFunction() {
            if (window.pageYOffset > 200) {
                topbtn.style.display = 'block';
            } else {
                topbtn.style.display = 'none';
            }
        }
        topbtn.addEventListener('click', function() {
            window.scrollTo(0, 0);
        });
    </script>

    <!-- <script>
        var swiper1 = new Swiper(".swiper1", {
            direction: 'horizontal',
            slidesPerView: 3,
            spaceBetween: 1,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script> -->

    <script>
        var myswiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: true,
            pagination: {
                //   el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                // when window width is >= 1421px
                1421: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            }
        });

        var swiper1 = new Swiper(".tSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: true,
            pagination: {
                //   el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <!-- wow.jss -->
    <script>
        new WOW().init();
    </script>
