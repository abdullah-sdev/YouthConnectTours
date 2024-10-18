@extends('admin.layout.main')

@section('main')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add New Attraction</h5>
                <p class="mb-0">This will be displayed on the website.</p>
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form
                            <form action="{{ route('dashboard.destination.attraction.update', ['destination' => $destination->id, 'attraction' => $attraction->id]) }}"
                            method="POST" enctype="multipart/form-data" class="container mt-4">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Attraction Name:</label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="{{ $attraction->name }}" value="{{ $attraction->name }}">
                            </div>
                            {{-- 
                            <div class="mb-3">
                                <label for="display_picture" class="form-label">Thumbnail Image:</label>
                                <input type="file" class="form-control" name="display_picture">
                            </div> --}}

                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags:</label>
                                <textarea name="tags" id="tags" class="form-control">{{ implode(', ', $attraction->tags->pluck('name')->toArray()) }}</textarea>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="gallery" class="form-label">Gallery:</label>
                                <input type="file" class="form-control" name="gallery[]" multiple>
                            </div> --}}
                            <input type="hidden" name="destination_id" value="{{ $destination->id }}">
                            <button type="submit" class="btn btn-primary">Submit Tour</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a
                    href="https://themewagon.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
        </div>
    </div>
@endsection
