@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Teacher</h4>
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
            <form method="post" action="{{ route('admin.teacher.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="teacher_name">Teacher Name</label>

                        <input class="form-control" id="teacher_name" name="teacher_name" type="text"
                            value="{{ old('teacher_name') }}" />
                        <span class="text-warning">
                            @error('teacher_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>

                       <input type="file" name="image" id="image" class="">
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="faculty_name">Faculty Name</label>

                        <input class="form-control" id="faculty_name" name="faculty_name" type="text"
                            value="{{ old('faculty_name') }}" />
                        <span class="text-warning">
                            @error('faculty_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                   


                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="editor" cols="50" rows="10">{{ old('description') }}</textarea>
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