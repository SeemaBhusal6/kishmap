@if(session()->has('success'))
   <div id="message" class="fixed right-5 top-5">
      <div class="bg-green-500 tect-white py-2 px-5 rounded">
         <p class="text-2xl">
         <i class="ri-checkbox-circle-fill"></i> {{session('success')}}
         </p>
      </div>
   </div>
   <script>
      $('#message').delay(2000).fadeOut();
   </script>
   @endif