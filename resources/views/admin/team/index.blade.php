@extends('layouts.app')
@section('heading')
Team Members
@endsection
@section('content')

<div class="flex justify-end">
        <a href="{{route('team.create')}}" class="bg-blue-600 text-white px-5 py-2 rounded">Add team</a>
    </div>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
    
         <tbody>
            @foreach ($teams as $team )
            <tr>
               <td>{{ $team->priority }}</td>
               <td>{{ $team->name }}</td>
               <td>{{ $team->title }}</td>
               

               <td><img class="h-20" src="{{asset('images/team/'.$team->photopath)}}" alt=""></td>
               <td>
                  <a href="{{route('team.edit',$team->id)}}" class="bg-green-400 rounded-lg px-2 cursor-pointer"  >Edit</a>
                  <a onclick="showDelete('{{$team->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1">Delete</a>
                  </td>
                  
            </tr>
               
            @endforeach
         </tbody>
     </table>
     {{--delete popup--}}
    <div id="popup" class="fixed hidden items-center justify-center inset-0 bg-blue-500 bg-opacity-50 backdrop-blur-sm">
      <form action="{{route('team.destroy')}}" method="POST" class="bg-white px-10 py-5 rounded-lg">
      @csrf
         @method('DELETE')

         <h1 class="text-3xl font-bold">Are you sure to delete</h1>
         <div class="flex justify-center mt-4">
         <input type="hidden" name="dataid" id="dataid">
            <input type="submit" value="Yes" class="bg-blue-600 text-white px-10 py-2 roundrd-lg cursor-pointer mx-2">
            <a onclick="hideDelete()" class="bg-red-600 text-white px-10 py-2 rounded-lg mx-2">No</a>
         
      

         </div>

      </form>
   </div>

   <script>
        let table = new DataTable('#myTable');
    </script>

<script>
          function showDelete(id)
         {
            document.getElementById('dataid').value = id;
            var popup = document.getElementById('popup');
            popup.classList.remove('hidden');
            popup.classList.add('flex');
         }
      </script>
      <script>
         function hideDelete()
         {
            var popup = document.getElementById('popup');
            popup.classList.remove('flex');
            popup.classList.add('hidden');
         }
      </script>
  
   

@endsection