@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Registration Form Details</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.enrollmentForm.index') }}">Registration Form Messages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Registration Form Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <h4 class="text-blue h4 mb-4">Registration Form Information</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card p-4 shadow">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <strong>Full Name:</strong>
                                <p>{{ $enrollmentForm->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Email:</strong>
                                <p>{{ $enrollmentForm->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Phone No:</strong>
                                <p>{{ $enrollmentForm->phone_no }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Address:</strong>
                                <p>{{ $enrollmentForm->address }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>College Name:</strong>
                                <p>{{ $enrollmentForm->college_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Faculty:</strong>
                                <p>{{ $enrollmentForm->faculty }}</p>
                            </div>
                            <div class="col-md-6">
                                <strong>Photo of ID card:</strong>
                                <img src="{{$enrollmentForm->photo_of_id_card}}" alt="{{ $enrollmentForm->name }}" class="border border-danger h-72">
                            </div>
                            <div class="col-md-6">
                               <strong>Photo Of Post Shared:</strong>
                                <img src="{{$enrollmentForm->photo_of_post_shared}}" alt="{{ $enrollmentForm->name }}" class="border border-danger h-72">
                            </div>
                            <div class="col-md-12 mt-5">
                                <strong>Message:</strong>
                                <p>{{ $enrollmentForm->message }}</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('admin.enrollmentForm.index') }}" class="btn btn-primary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection