@extends('frontend.layouts.master')
@section('content')
    <section>
        <x-frontend.slider :sliders="$sliders" />
        {{-- @if ($notices->first()?->status == 1) --}}
        <div id="exampleModal" class="fixed inset-0 z-50 flex  justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <button id="closeModalButton"
                    class="text-gray-500 hover:text-gray-700 flex justify-between items-center  p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="flex justify-between items-center border-t  p-4">

 <h2 class="text-2xl font-semibold text-gray-800">
                        CEH Class Registration Form
                        <span class="text-yellow-500 font-extrabold">___</span>
                    </h2>
                </div>
                <!-- Modal Body -->
                <div class="p-4 ">
                    <div class="relative">
                        <form id="popupForm" action="{{ route('enrollmentForm') }}" method="POST" enctype="multipart/form-data">
                            @csrf
 @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('name')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('email')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-4">
                                <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone
                                    Number</label>
                                <input type="text" name="phone_no" id="phone_no" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('phone_no')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="address" id="address" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('address')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="college_name" class="block text-sm font-medium text-gray-700">College
                                    Name</label>
                                <input type="text" name="college_name" id="college_name" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('college_name')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="faculty" class="block text-sm font-medium text-gray-700">Faculty</label>
                                <input type="text" name="faculty" id="faculty" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('faculty')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="photo_of_id_card" class="block text-sm font-medium text-gray-700">Photo
                                    Of Id
                                    Card</label>
                                <input type="file" name="photo_of_id_card" id="photo_of_id_card" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('photo_of_id_card')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="photo_of_post_shared" class="block text-sm font-medium text-gray-700">Screenshot of FaceBook Post Share</label>
                                <input type="file" name="photo_of_post_shared" id="photo_of_post_shared" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                @error('photo_of_post_shared')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="4" required
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>

                                @error('message')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>



                            <!-- Submit Button -->
                            <div class="">
                                <button type="submit" style="background-color: blue"
                                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">
                                    Submit
                                </button>

                            </div>
                        </form>


                    </div>
                </div>
                @foreach ($notices as $notice)
                    <h2 class="text-2xl font-semibold text-gray-800">
                        {{ $notice?->title }}
                        <span class="text-yellow-500 font-extrabold">___</span>
                    </h2>
                    @if ($notice->status == 1)
                        <!-- Modal Header -->
                        <div class="flex justify-between items-center border-t  p-4">
                            <h2 class="text-2xl font-semibold text-gray-800">
                                {{ $notice?->title }}
                                <span class="text-yellow-500 font-extrabold">___</span>
                            </h2>

                        </div>
                        <!-- Modal Body -->
                        <div class="p-4 ">
                            <div class="relative">
                                <img src="{{ $notice?->image }}" alt="Notice Image">


                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
        {{-- @endif --}}
    </section>
    <section>
        <x-frontend.indexAboutus :about="$about" />
    </section>
    <section>
        <x-frontend.lifeAtNpj :galleries="$galleries" :about="$about" />
    </section>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('exampleModal');
            modal.classList.remove('hidden');

            const closeModalButton = document.getElementById('closeModalButton');
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        });
        
    </script> --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('exampleModal');
        modal.classList.remove('hidden');

        const closeModalButton = document.getElementById('closeModalButton');
        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        const popupForm = document.getElementById('popupForm');
        popupForm.addEventListener('submit', function () {
            // Hide the modal instantly
            modal.classList.add('hidden');
        });
    });
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#popupForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Create a FormData object to handle file uploads
            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val() // CSRF token
                },
                success: function (response) {
                    // Handle success (e.g., show a success message, reset form)
                    alert('Form submitted successfully!');
                    $('#popupForm')[0].reset();
                },
                error: function (xhr) {
                    // Handle validation or server errors
                    let errors = xhr.responseJSON.errors;
                    $('.text-red-600').text(''); // Clear existing errors

                    $.each(errors, function (key, value) {
                        $(`[name="${key}"]`).siblings('.text-red-600').text(value[0]);
                    });
                }
            });
        });
    });
</script>

@endsection
