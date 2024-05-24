@extends('layouts.master')
@section('content')
<section>
        <div class="text-white text-center bg-black flex items-center justify-center  h-96">
            <div>
                <p class="uppercase text-4xl font-bold mt-2 hover:bg-green-600">Notices-KIHM </p>
                <P class="">You Are Currently Here!<i class="ri-arrow-right-s-line font-bold"></i><a href="/" class="hover:bg-green-600">Home</a></P>
        </div>
    </div>
    </section>
    <div class="bg-white py-8">
        <div class="mx-4 xl:mx-14 2xl:w-11/12 2xl:mx-auto">
            <h1 class="md:text-3xl text-xl font-bold">
                Notices
            </h1>
            <hr class="h-2 mt-2">

                            <div
                    class="p-4 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 hover:bg-gray-300 border-b rounded wow animated fadeInLeft">

                   @foreach($notices as $notice)
                    <div class="lg:col-span-2">
                        <h2 class="md:text-xl text-lg font-bold">
                        {{ $notice->notice_title }}
                        </h2>
                        <p class="text-sm"><span class="font-bold">Date:{{ $notice->notice_date }}</span> <span class="">
                          </span></p>
                    </div>
                    <div class="mt-4 mb-4 md:mb-0 text-sm md:text-base">
                        <a href="{{ route('views',$notice->id) }}"
                            class="py-2 px-4 bg-slate-200 rounded-md mx-2">
                            <i class="ri-eye-fill"></i> View
                        </a>

                        <a href="{{asset('images/notice/'.$notice->photopath)}}"
                            class="py-2 px-4 bg-slate-200 rounded-md mx-2" download="Untitled">
                            <i class="ri-file-download-fill"></i> Download
                        </a>
                    </div>
                    @endforeach
                    
                </div>
      
      
      
      </div>
    
    
</div>
    
                    
                    

                    

    
@endsection