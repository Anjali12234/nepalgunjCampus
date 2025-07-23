@extends('frontend.layouts.master')
@section('content')
    <section>
        <x-frontend.slider :sliders="$sliders" />
        @if ($notices->first()?->status == 1)
        <div id="exampleModal" class="fixed inset-0 z-50 flex  justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <button id="closeModalButton"
                    class="text-gray-500 hover:text-gray-700 flex justify-between items-center  p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                {{--<div class="flex justify-between items-center border-t  p-4">

                    <h2 class="text-2xl font-semibold text-gray-800">
                         Entrance Class Form
                        <span class="text-yellow-500 font-extrabold">___</span>
                    </h2>
                </div>
                <!-- Modal Body -->
                 <div class="p-4 ">
                    <div class="relative">
                        @include('sweetalert::alert')
                        @if ($errors->any())
                            <div class="alert alert-danger text-red-500">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="" action="{{ route('registrationForm') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="name"></span>
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="email"></span>
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone_no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="text" name="phone_no" id="phone_no"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="phone_no"></span>
                            </div>

                            <!-- Address -->
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="address" id="address"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="address"></span>
                            </div>

                            <!-- College Name -->
                            <div class="mb-4">
                                <label for="college_name" class="block text-sm font-medium text-gray-700">College
                                    Name</label>
                                <input type="text" name="college_name" id="college_name"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="college_name"></span>
                            </div>

                            <!-- Faculty -->
                            <div class="mb-4">
                                <label for="faculty" class="block text-sm font-medium text-gray-700">Faculty</label>
                                <select name="faculty" id="faculty"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                    <option value="">Select Faculty</option>
                                    <option value="Science">Science</option>
                                    <option value="Management">Management</option>
                                    <option value="Arts">Arts</option>
                                </select>
                                <span class="text-sm text-red-600 error-text" data-name="faculty"></span>
                            </div>


                            <!-- ID Card -->
                            {{-- <div class="mb-4">
                                <label for="photo_of_id_card" class="block text-sm font-medium text-gray-700">Photo Of ID
                                    Card</label>
                                <input type="file" name="photo_of_id_card" id="photo_of_id_card"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="photo_of_id_card"></span>
                            </div>

                            <!-- Facebook Post Screenshot -->
                            <div class="mb-4">
                                <label for="photo_of_post_shared" class="block text-sm font-medium text-gray-700">Screenshot
                                    of Facebook Post Share</label>
                                <input type="file" name="photo_of_post_shared" id="photo_of_post_shared"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <span class="text-sm text-red-600 error-text" data-name="photo_of_post_shared"></span>
                            </div> 

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="4"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md"></textarea>
                                <span class="text-sm text-red-600 error-text" data-name="message"></span>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end">
                                <button type="submit" style="background-color:blue"
                                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">
                                    Submit
                                </button>

                            </div>
                        </form>
                    </div>
                </div> --}}
                @foreach ($notices as $notice)
                    <h2 class="text-2xl font-semibold text-gray-800">
                    Notice
                        <span class="text-yellow-500 font-extrabold">___</span>
                    </h2>
                    @if ($notice->status == 1)
                        <!-- Modal Header -->
                        {{-- <div class="flex justify-between items-center border-t  p-4">
                            <h2 class="text-2xl font-semibold text-gray-800">
                                {{ $notice?->title }}
                                <span class="text-yellow-500 font-extrabold">___</span>
                            </h2>

                        </div> --}}
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
        @endif
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
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('exampleModal');
            modal.classList.remove('hidden');

            const closeModalButton = document.getElementById('closeModalButton');
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            const popupForm = document.getElementById('popupForm');
            popupForm.addEventListener('submit', function() {
                // Hide the modal instantly
                modal.classList.add('hidden');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const modal = $('#exampleModal');

            // Show modal on page load
            modal.removeClass('hidden');

            // Close modal
            $('#closeModalButton').on('click', function() {
                modal.addClass('hidden');
            });

            $('#popupForm').on('submit', function(e) {
                e.preventDefault();

                const phone_no = $('#phone_no').val();
                const phone_noRegex = /^(98|97)\d{8}$/;

                if (!phone_noRegex.test(phone_no)) {
                    alert("Phone number must start with 98 or 97 and be exactly 10 digits.");
                    return;
                }

                const allowedExtensions = /(\.jpg|\.jpeg|\.pdf)$/i;

                const idCardFile = $('#photo_of_id_card').val();
                const postSharedFile = $('#photo_of_post_shared').val();

                if (!allowedExtensions.exec(idCardFile)) {
                    alert("ID card must be a JPG, PNG, or PDF file.");
                    return;
                }

                if (!allowedExtensions.exec(postSharedFile)) {
                    alert("Post shared photo must be a JPG, PNG, or PDF file.");
                    return;
                }
                let form = $(this);
                let formData = new FormData(this);

                // Clear previous errors
                $('.error-text').text('');

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        alert(response.success);
                        form[0].reset();
                        modal.addClass('hidden');
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $(`.error-text[data-name="${key}"]`).text(value[0]);
                            });
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
