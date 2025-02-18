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
            <form method="post" action="{{ route('admin.course.update', $course) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label>Semester</label>
                        <select class="custom-select2 form-control" name="semester_id" style="width: 100%; height: 38px">
                            <option value="">Choose Semester</option>
                            @foreach ($semesters as $semester)
                                <option
                                    value="{{ $semester->id }}"{{ old('semester_id', $course->semester_id) == $semester->id ? 'selected' : '' }}>
                                    {{ $semester->title }}/{{ $semester?->programme?->programme_short_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-warning">
                            @error('semester_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_code">Course Code</label>

                        <input class="form-control" id="course_code" name="course_code" type="text"
                            value="{{ old('course_code', $course->course_code) }}" />
                        <span class="text-warning">
                            @error('course_code')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_title">Course Title</label>

                        <input class="form-control" id="course_title" name="course_title" type="text"
                            value="{{ old('course_title', $course->course_title) }}" />
                        <span class="text-warning">
                            @error('course_title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="course_pdf">Course Pdf</label>

                        <input class="form-control" id="course_pdf" name="course_pdf" type="file"
                            value="{{ old('course_pdf', $course->course_pdf) }}" />
                        <span class="text-warning">
                            @error('course_pdf')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="credit_hr">Credit Hr</label>

                        <input class="form-control" id="credit_hr" name="credit_hr" type="number"
                            value="{{ old('credit_hr', $course->credit_hr) }}" />
                        <span class="text-warning">
                            @error('credit_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lecture_hr">Lecture Hr</label>

                        <input class="form-control" id="lecture_hr" name="lecture_hr" type="number"
                            value="{{ old('lecture_hr', $course->lecture_hr) }}" />
                        <span class="text-warning">
                            @error('lecture_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tutorial_hr">Tutorial Hr</label>

                        <input class="form-control" id="tutorial_hr" name="tutorial_hr" type="number"
                            value="{{ old('tutorial_hr', $course->tutorial_hr) }}" />
                        <span class="text-warning">
                            @error('tutorial_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lab_hr">Lab Hr</label>

                        <input class="form-control" id="lab_hr" name="lab_hr" type="number"
                            value="{{ old('lab_hr', $course->lab_hr) }}" />
                        <span class="text-warning">
                            @error('lab_hr')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="total_hr">Total Hr</label>

                        <input class="form-control" id="total_hr" name="total_hr" type="number"
                            value="{{ old('total_hr', $course->total_hr) }}" />
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
