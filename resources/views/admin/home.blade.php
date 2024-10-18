@extends('admin.layout.main')

@section('main')
  
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
      <p class="mb-0">This is a sample page </p>
      <a href="{{ route('dashboard.index') }}" class="btn btn-primary m-1">Admin</a>
      <a href="{{ route('dashboard.destination.index') }}" class="btn btn-primary m-1">Destinations</a>
    </div>
  </div>
  <div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
        class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com/" target="_blank"
        class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
  </div>
</div>
@endsection
