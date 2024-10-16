@extends('admin.layout.main')

@section('main')
    <div class="container-fluid">
        <h1 class="mt-4">Attractions</h1>
        <ol class="breadcrumb mb-4">
            {{-- <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li> --}}
            <li class="breadcrumb-item active">Attractions</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Attractions
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Destination</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attractions as $attraction)
                                <tr>
                                    <td>{{ $attraction->name }}</td>
                                    <td>{{ $attraction->destination->name }}</td>
                                    <td>
                                        <a href="{{ route('destination.attraction.create', ['destination' => $attraction->destination_id]) }}"
                                            class="btn btn-primary mb-3">Create</a>
                                        <a href="{{ route('destination.attraction.show', ['destination' => $attraction->destination_id, 'attraction' => $attraction->id]) }}" class="btn btn-primary">Show</a>
                                    
                                    </td>
                                    {{-- <td>
                                    <a href="{{ route('admin.attraction.edit', ['attraction' => $attraction->id]) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.attraction.destroy', ['attraction' => $attraction->id]) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
