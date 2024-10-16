<div class="offerandtours">
    <div class="tours">


        {{-- <x-offerandtour.tour>
        </x-offerandtour.tour> --}}
      
        {{ $tour }}

     
     
    </div>
    @if (isset($popular))
    <div class="offers">
        <h2>Popular</h2>
        
        {{ $popular }}

       
    </div>
    @endif
</div>