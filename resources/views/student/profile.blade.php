@extends('student.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Profile</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <div class="profile-photo">

                        <img src="{{ $studentDetail?->image }}"
                            alt="{{ auth()->guard('student')->user()->name }}" class="avatar-photo" />
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form method="post" action="{{ route('student.profile.destroy') }}" class="p-6">
                                        @csrf
                                        @method('delete')

                                        <div class="modal-body pd-5">
                                            <div class="form-group">
                                                <label> Password</label>
                                                <input class="form-control form-control-lg" name="password" type="password"
                                                    autocomplete="new-password" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Delete Account" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center h5 mb-0">{{ auth()->guard('student')->user()->name }}</h5>

                    <div class="profile-info">

                        <ul>
                            <li>
                                <span>Email address:</span>
                                {{ auth()->guard('student')->user()->email }}
                            </li>
                            <button class="btn btn-danger" href="modal" data-toggle="modal" data-target="#modal">
                                Delete account
                            </button>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profile-information"
                                        role="tab">Profile Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#update-password" role="tab">Update
                                        Password</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="profile-information" role="tabpanel">
                                    <div class="profile-setting">
                                        <form method="post" action="{{ route('student.studentDetail.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12 row">
                                                <div class="form-group col-md-6">
                                                    <label for="image">Image</label>
                                                    <input class="form-control" name="image" type="file" />
                                                    <span class="text-warning">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="name">Name</label>
                                                    <input class="form-control" id="name" name="name" type="text"
                                                        value="{{ old('name', Auth::guard('student')->user()->name) }}" />
                                                    <span class="text-warning">
                                                        @error('name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input class="form-control" name="address" type="text"
                                                        value="{{ old('address', $studentDetail?->address) }}" />
                                                    <span class="text-warning">
                                                        @error('address')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input class="form-control" name="email" type="text"
                                                        value="{{ old('email', $student?->email) }}" />
                                                    <span class="text-warning">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone_number">Phone No</label>
                                                    <input class="form-control" name="phone_number" type="number"
                                                        value="{{ old('phone_number', $studentDetail?->phone_number) }}" />
                                                    <span class="text-warning">
                                                        @error('phone_number')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="roll_no">Roll No</label>
                                                    <input class="form-control" name="roll_no" type="number"
                                                        value="{{ old('roll_no', $student->roll_no) }}" />
                                                    <span class="text-warning">
                                                        @error('roll_no')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Faculty</label>
                                                    <input class="form-control" name="faculty_name" type="text"
                                                        value="{{ old('faculty_name', $studentDetail?->faculty_name) }}" />
                                                    <span class="text-warning">
                                                        @error('faculty_name')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="registration_no">Registration No</label>
                                                    <input class="form-control" name="registration_no" type="number"
                                                        value="{{ old('registration_no', $studentDetail?->registration_no) }}" />
                                                    <span class="text-warning">
                                                        @error('registration_no')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Facebook Url</label>
                                                    <input class="form-control" name="facebook_url" type="text"
                                                        value="{{ old('facebook_url', $studentDetail?->facebook_url) }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Instagram Url</label>
                                                    <input class="form-control" name="instagram_url" type="text"
                                                        value="{{ old('instagram_url', $studentDetail?->instagram_url) }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea name="description" class="form-control">{{ old('description', $studentDetail?->description) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="m-5">
                                                <button class="btn btn-danger" type="submit">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="update-password" role="tabpanel">
                                    <div class="profile-setting">

                                        <form method="post" action="{{ route('student.password.update') }}"
                                            class="mt-6 space-y-6">
                                            @csrf
                                            @method('put')

                                            <ul class="profile-edit-list">
                                                <li class="weight-500 col-md-6">
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input class="form-control form-control-lg"
                                                            name="current_password" value="" type="password"
                                                            autocomplete="current-password" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input class="form-control form-control-lg" name="password"
                                                            type="password" autocomplete="new-password" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input class="form-control form-control-lg"
                                                            name="password_confirmation" type="password"
                                                            autocomplete="new-password" />
                                                    </div>


                                                    <div class="form-group mb-0">
                                                        <input type="submit" class="btn btn-primary"
                                                            value="Update Information" />
                                                    </div>
                                                    @if (session('status') === 'password-updated')
                                                        <p x-data="{ show: true }" x-show="show" x-transition
                                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                            {{ __('Saved.') }}</p>
                                                    @endif
                                                </li>

                                            </ul>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
