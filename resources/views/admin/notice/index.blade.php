@extends('layouts.app')
@section('heading')
   Notice
@endsection
   @section('content')
   @include('layouts.message')
   <div class="flex justify-end">
      <a href="{{ route('notice.create') }}" class="bg-green-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 ">Add Notice</a>
   </div>
   
   <table id="myTable" class="display">
      <thead>
         <tr>
            <th>Order</th>
            <th>Title</th>
            <th>Date</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
         </tr>
      </thead>

         
         <tbody>
            @foreach ($notices as $notice)
            <tr>
               <td>{{ $notice->priority }}</td>
               <td>{{ $notice->notice_title }}</td>
               <td>{{ $notice->notice_date }}</td>
               <td><img class="h-20" src="{{asset('images/notice/'.$notice->photopath)}}" alt=""></td>
               <td>{{ $notice->show?'Show':'Hide' }}</td>
               <td>
                  <a href="{{ route('notice.edit', $notice->id) }}" class="bg-green-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 ">Edit</a>
                  <a onclick="showDelete('{{$notice->id}}')" class="bg-green-400 text-white hover:bg-orange-400 rounded-lg shadow p-2 ">Delete</a>
                  
               </td>
            </tr>
               @endforeach
         </tbody>
      </table>
   </div>
   {{--delete popup --}}
   <div id="popup" class="fixed hidden items-center justify-center inset-0 bg-blue-500 bg-opacity-50 backdrop-blur-sm">
      <form action="{{route('notice.destroy')}}" method="POST" class="bg-white px-10 py-5 rounded-lg">
         @csrf
         @method('DELETE')
         <h1 class="text-3xl font-bold">
            Are you sure to delete
         </h1>
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