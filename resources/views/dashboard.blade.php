@extends('layouts.app')
@section('heading')
   Dashboard
@endsection
@section('content')



    <div class="grid grid-cols-3 gap-10">
        <div class="bg-purple-600  text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Courses</h1>
            <h1 class="text-4xl font-bold"></h1>
        </div>

        <div class="bg-orange-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Notices</h1>
            <h1 class="text-4xl font-bold"></h1>
        </div>

        <div class="bg-green-500 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Blogs</h1>
            <h1 class="text-4xl font-bold"></h1>
        </div>

        

       
        
    </div>
    <div class="col-span-2">
  <canvas id="myChart"></canvas>
</div>
@endsection