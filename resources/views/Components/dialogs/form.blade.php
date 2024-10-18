<form action="" method="post" id="{{ $id }}">
    @csrf
    {{ $slot }}
    <style>
      

        

       
        .step.active {
            display: block;
        }
    </style>

   
</form>

