@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Course</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Course
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.course.index') }}" role="button">
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
            <form method="post" action="{{ route('admin.course.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Semester<span style="color: red; margin-left: 5px;">*</span></label>
                        <select class="custom-select2 form-control" name="semester_id" style="width: 100%; height: 38px">
                            <option value="">Choose Semester</option>
                            @foreach ($semesters as $semester)
                                <option value="{{ $semester->id }}">{{ $semester->title }}/{{ $semester?->programme?->programme_short_name }}</option>
                            @endforeach


                        </select>
                        <span class="text-warning">
                            @error('semester_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_code">Course Code<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="course_code" name="course_code" type="text"
                            value="{{ old('course_code') }}" />
                        <span class="text-warning">
                            @error('course_code')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_title">Course Title<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="course_title" name="course_title" type="text"
                            value="{{ old('course_title') }}" />
                        <span class="text-warning">
                            @error('course_title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_pdf">Course Pdf<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="course_pdf" name="course_pdf" type="file"
                            value="{{ old('course_pdf') }}" />
                        <span class="text-warning">
                            @error('course_pdf')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="credit_hr">Credit Hr</label>

                        <input class="form-control" id="credit_hr" name="credit_hr" type="number"
                            value="{{ old('credit_hr') }}" />
                        <span class="text-warning">
                            @error('credit_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lecture_hr">Lecture Hr</label>

                        <input class="form-control" id="lecture_hr" name="lecture_hr" type="number"
                            value="{{ old('lecture_hr') }}" />
                        <span class="text-warning">
                            @error('lecture_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tution_hr">Tutorial Hr</label>

                        <input class="form-control" id="tution_hr" name="tution_hr" type="number"
                            value="{{ old('tution_hr') }}" />
                        <span class="text-warning">
                            @error('tution_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lab_hr">Lab Hr</label>

                        <input class="form-control" id="lab_hr" name="lab_hr" type="number"
                            value="{{ old('lab_hr') }}" />
                        <span class="text-warning">
                            @error('lab_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="full_marks">Full Marks</label>

                        <input class="form-control" id="full_marks" name="total_hr" type="number"
                            value="{{ old('total_hr') }}" />
                        <span class="text-warning">
                            @error('total_hr')
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
