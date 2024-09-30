@extends('admin.layout.main')

@section('main')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create A Tour</h5>
                <p class="mb-0">This is a sample page </p>
                <div class="card">
                    <div class="card-body">
                        {{-- {{ route('tours.store') }} --}}
                        <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data"
                            class="container mt-4">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Tour Name:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Location:</label>
                                <input type="text" class="form-control" name="location" required>
                            </div>

                            <div class="mb-3">
                                <label for="session_start" class="form-label">Session Start:</label>
                                <input type="month" class="form-control" name="session_start" required>
                            </div>

                            <div class="mb-3">
                                <label for="session_end" class="form-label">Session End:</label>
                                <input type="month" class="form-control" name="session_end" required>
                            </div>

                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration:</label>
                                <input type="text" class="form-control" name="duration" required>
                            </div>

                           
                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags:</label>
                                <textarea name="tags" id="tags" class="form-control"></textarea>
                                {{-- <input type="text" class="form-control" name="tags" required> --}}
                            </div>

                            <div class="mb-3">
                                <label for="gallery" class="form-label">Gallery:</label>
                                <input type="file" class="form-control" name="gallery[]" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Tour</button>
                        </form>

                        <script>
                            // function addItinerary() {
                            //     const select = document.querySelector('select[name="itineraries[]"]');
                            //     const newOption = document.createElement('option');
                            //     newOption.value = prompt("Enter new itinerary:");
                            //     newOption.textContent = newOption.value;
                            //     select.appendChild(newOption);
                            // }

                            // function addTag() {
                            //     const select = document.querySelector('select[name="tags[]"]');
                            //     const newOption = document.createElement('option');
                            //     newOption.value = prompt("Enter new tag:");
                            //     newOption.textContent = newOption.value;
                            //     select.appendChild(newOption);
                            // }

                            // function addAttraction() {
                            //     const select = document.querySelector('select[name="attractions[]"]');
                            //     const newOption = document.createElement('option');
                            //     newOption.value = prompt("Enter new attraction:");
                            //     newOption.textContent = newOption.value;
                            //     select.appendChild(newOption);
                            // }

                            // function addInclusion() {
                            //     const select = document.querySelector('select[name="inclusions[]"]');
                            //     const newOption = document.createElement('option');
                            //     newOption.value = prompt("Enter new inclusion:");
                            //     newOption.textContent = newOption.value;
                            //     select.appendChild(newOption);
                            // }

                            // function addGuideline() {
                            //     const select = document.querySelector('select[name="guidelines[]"]');
                            //     const newOption = document.createElement('option');
                            //     newOption.value = prompt("Enter new guideline:");
                            //     newOption.textContent = newOption.value;
                            //     select.appendChild(newOption);
                            // }

                            // function addExperience() {
                            //     const experienceContainer = document.querySelector('div.mb-3:nth-last-of-type(2)');
                            //     const newExperience = document.createElement('textarea');
                            //     newExperience.name = "experiences[]";
                            //     newExperience.className = "form-control mt-2";
                            //     newExperience.rows = 3;
                            //     newExperience.placeholder = "Enter experience...";
                            //     experienceContainer.appendChild(newExperience);
                            // }

                            // function handleSubmit(event) {
                            //     // Prevent the default form submission
                            //     event.preventDefault();

                            //     // Disable the submit button to prevent multiple clicks
                            //     const submitButton = document.querySelector('button[type="submit"]');
                            //     submitButton.disabled = true;
                            //     submitButton.textContent = "Submitting...";
                            //     // Add any additional logic here (e.g., validation, data manipulation)
                                

                            //     // Optionally, show a loading spinner or message

                            //     // Now submit the form programmatically
                            //     document.getElementById('tourForm').submit();
                            // }
                        </script>

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
