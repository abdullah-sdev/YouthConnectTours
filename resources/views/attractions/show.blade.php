@extends('admin.layout.main')

@section('main')
<div class="container-fluid">
    <h1 class="mt-4">Attractions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Attractions</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-info-circle mr-1"></i>
            Attraction Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $attraction->name }} - {{ $attraction->id }}</h5>
            <p class="card-text">
                Destination: {{ $attraction->destination->name }}
            </p>
            <p class="card-text">
                Tags:
                @if ($attraction->tags->count() > 0)
                    <ul class="list-inline">
                        @foreach ($attraction->tags as $tag)
                            <li class="list-inline-item">{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <span class="badge badge-secondary">No tags assigned</span>
                @endif
            </p>
        <img src="{{ asset('uploads/'. str_replace('http://localhost/travelandtours_new/public/', '', $attraction->display_picture)) }}" alt="xx" height="200px">

<a href="{{ route('adminsa.destination.attraction.edit', ['destination' => $attraction->destination_id, 'attraction' => $attraction->id]) }}" class="btn btn-primary">Edit</a>
            {{-- <img src="{{ asset('storage/' . $attraction->display_picture) }}" alt="" class="img-thumbnail" style="max-width: 300px; max-height: 300px;"> --}}
            
        </div>
    </div>
</div>
@endsection
{{-- {{ $attraction->name }}
{{ $attraction->destination->name }}
<br>
@foreach ($attraction->tags as $tag)
    {{ $tag->name }} <br>
@endforeach --}}
