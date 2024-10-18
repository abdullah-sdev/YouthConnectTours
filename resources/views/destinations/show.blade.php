{{-- 
    {{ $destination->name }} <br>
    {{ $destination->ideal_time_period }} <br>
    {{ $destination->ideal_time_to_visit }}

    <br>
    <a href="{{ route('dashboard.destination.attraction.create', ['destination' => $destination->id]) }}">Create New Attraction</a>
    
    <h4>Destination Attractions</h4>
    @forelse ($destination->attractions as $attraction)
{{ $attraction->id }}
<br>
        {{ $attraction->name }} <br>
        <img src="{{ asset('uploads/'. str_replace('http://localhost/travelandtours_new/public/', '', $attraction->display_picture)) }}" alt="xx" height="200px">
        <br><br>
    @empty
        No attractions available for this destination
    @endforelse
     --}}

@extends('admin.layout.main')
@section('main')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Destinations</h5>
                <p class="mb-0">
                    {{ $destination->name }} <br>
                    {{ $destination->ideal_time_period }} <br>
                    {{ $destination->ideal_time_to_visit }}    
                </p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                {{-- <a href="{{ route('dashboard.destination.create') }}" class="btn btn-primary mb-4">Create New Destination +</a> --}}
    <a href="{{ route('dashboard.destination.attraction.create', ['destination' => $destination->id]) }}">Create New Attraction</a>

                <div class="row">
                    {{-- <pre>
                        {{ print_r($destination->attractions) }}
                    </pre> --}}
                    @forelse ($destination->attractions as $attraction)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-3">{{ $attraction->name }}</h5>
        <img src="{{ asset('uploads/'. str_replace('http://localhost/travelandtours_new/public/', '', $attraction->display_picture)) }}" alt="xx" height="200px">

        <a href="{{ route('dashboard.destination.attraction.show', ['destination' => $destination->id, 'attraction' => $attraction->id]) }}">Show</a>
                                    {{-- <p class="card-text mb-2"><b>ideal_time_period:</b>{{ $attraction->ideal_time_period ?? '' }}</p>
                                    <p class="card-text mb-2"><b>ideal_time_to_visit:</b>{{ $attraction->ideal_time_to_visit ?? '' }}</p> --}}
                                    {{-- <a href="{{ route('dashboard.destination.show', $attraction->id) }}" class="btn btn-primary btn-sm">Show Attractions</a> --}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No destinations added yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

