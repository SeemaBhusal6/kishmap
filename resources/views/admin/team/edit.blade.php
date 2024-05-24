@extends('layouts.app')
@section('heading')
Edit Members
@endsection
@section('content')
<form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <input type="text" name="priority" placeholder="Enter Priority" class="w-full rounded-lg" value="{{$team->priority}}">
        @error('priority')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <input type="text" name="name" placeholder="Enter Name" class="w-full rounded-lg mt-4" value="{{$team->name}}">
        @error('name')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        <input type="text" name="title" placeholder="Enter title" class="w-full rounded-lg mt-4" value="{{$team->title}}">
        @error('title')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror
        
        <input type="file" name="photopath" class="w-full rounded-lg mt-4 p-2 border border-gray-500" >
        @error('photopath')
            <p class="text-red-500 text-xs mt-0">{{$message}}</p>
        @enderror

        <div class="flex justify-center mt-4">
            <button type="submit" class="bg-blue-600 text-white mx-2 px-4 py-2 rounded-lg">Edit team member</button>
            <a href="{{route('team.index')}}" class="bg-red-600 text-white mx-2 px-10 py-2 rounded-lg">Exit</a>
        </div>
    </form>
@endsection

