@extends('layouts.app')
@section('heading')
   Create Notice
@endsection
   @section('content')
   @include('layouts.message')	
   <div class="flex justify-end">
    <a href="{{ route('notice.index')}}" class="bg-green-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 "><i class="ri-arrow-left-line"></i>Back</a>
 </div>
 <form action="{{route('notice.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
 <input type="text" name="priority" placeholder="Enter Priority" class="w-full rounded-lg mt-4 p-2" value="{{old('priority')}}">
        @error('priority')
            <p class="text-red-500 text-xs mt-0">*{{$message}}</p>
        @enderror
        <input type="text" name="notice_title" placeholder="Enter title" class="w-full rounded-lg mt-4 p-2" value="{{old('notice_title')}}">
        @error('notice_title')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <input type="date" name="notice_date" placeholder="Enter date" class="w-full rounded-lg mt-4 p-2" value="{{ old('notice_date') }}">
        @error('notice_date')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <input type="file" name="photopath" class="w-full rounded-lg mt-4 p-2 border border-gray-500">
        @error('photopath')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <select name="show" id="" class=" my-2 rounded bg-orange-300">
                <option value="1">Show</option>
                <option value="0">Hide</option>
            </select>
            
            <div class="flex justify-end px-3 mb-2">
                <button type="submit" class="bg-green-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 ">Add Notice</button>
               
                <a href="{{ route('notice.index') }}"class="bg-red-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 ml-3 ">Cancel</a>
            </div>
 </form>
   @endsection