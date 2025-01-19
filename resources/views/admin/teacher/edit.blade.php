@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Teacher </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Teacher 
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.teacher.index') }}" role="button">
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.teacher.update', $teacher) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="teacher_name">Teacher Name</label>

                        <input class="form-control" id="teacher_name" name="teacher_name" type="text"
                            value="{{ old('teacher_name', $teacher->teacher_name) }}" />
                        <span class="text-warning">
                            @error('teacher_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <img src="{{ $teacher->image }}" height="100" width="100" alt="">
                        <input type="file" name="image" id="image" class="form-control">
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="faculty_name">Faculty Name</label>

                        <input class="form-control" id="faculty_name" name="faculty_name" type="text"
                            value="{{ old('faculty_name', $teacher->faculty_name) }}" />
                        <span class="text-warning">
                            @error('faculty_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>

                        <input class="form-control" id="email" name="email" type="email"
                            value="{{ old('email', $teacher->email) }}" />
                        <span class="text-warning">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone_number">Phone Number</label>

                        <input class="form-control" id="phone_number" name="phone_number" type="number"
                            value="{{ old('phone_number', $teacher->phone_number) }}" />
                        <span class="text-warning">
                            @error('phone_number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>

                        <input class="form-control" id="address" name="address" type="text"
                            value="{{ old('address', $teacher->address) }}" />
                        <span class="text-warning">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label for="facebook_url">Facebook Url</label>
                        <input class="form-control" id="facebook_url" name="facebook_url" type="text"
                        value="{{ old('facebook_url', $teacher->facebook_url)}}" />
                        <span class="text-warning">
                            @error('facebook_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="instagram_url">Instagram Url</label>
                        <input class="form-control" id="instagram_url" name="instagram_url" type="text"
                        value="{{ old('instagram_url', $teacher->instagram_url) }}" />
                        <span class="text-warning">
                            @error('instagram_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $teacher->description) }}</textarea>
                        <span class="text-warning">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
