@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Programme</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Programme
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="{{ route('admin.programme.create') }}" role="button">
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
            <form method="post" action="{{ route('admin.programme.update',$programme) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="programme_short_name">Programme</label>

                        <input class="form-control" id="programme_short_name" name="programme_short_name" type="text"
                            value="{{ old('programme_short_name',$programme->programme_short_name) }}" />
                        <span class="text-warning">
                            @error('programme_short_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="programme_full_name">Programme</label>

                        <input class="form-control" id="programme_full_name" name="programme_full_name" type="text"
                            value="{{ old('programme_full_name',$programme->programme_full_name) }}" />
                        <span class="text-warning">
                            @error('programme_full_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="university">University</label>

                        <input class="form-control" id="university" name="university" type="text"
                            value="{{ old('university',$programme->university) }}" />
                        <span class="text-warning">
                            @error('university')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="years">Years</label>

                        <input class="form-control" id="years" name="years" type="number"
                            value="{{ old('years',$programme->years) }}" />
                        <span class="text-warning">
                            @error('years')
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
