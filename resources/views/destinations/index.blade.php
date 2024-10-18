@extends('admin.layout.main')
@section('main')
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Destinations</h5>
                <p class="mb-0">This is a sample page </p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{ route('dashboard.destination.create') }}" class="btn btn-primary mb-4">Create New Destination +</a>
                <div class="row">
                    @forelse ($destinations as $destination)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-3">{{ $destination->name }}</h5>
                                    <p class="card-text mb-2"><b>ideal_time_period:</b>{{ $destination->ideal_time_period ?? '' }}</p>
                                    <p class="card-text mb-2"><b>ideal_time_to_visit:</b>{{ $destination->ideal_time_to_visit ?? '' }}</p>
                                    <a href="{{ route('dashboard.destination.show', $destination->id) }}" class="btn btn-primary btn-sm">Show Attractions</a>
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

