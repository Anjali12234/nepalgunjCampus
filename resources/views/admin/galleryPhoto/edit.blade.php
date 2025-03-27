@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Gallery List</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Gallery List
                            </li>
                        </ol>
                    </nav>
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
            <form method="post" action="{{ route('admin.galleryPhoto.update',$galleryPhoto) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title">Title<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title',$galleryPhoto->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Gallery Category<span style="color: red; margin-left: 5px;">*</span></label>
                        <select class="custom-select2 form-control" name="gallery_id"
                            style="width: 100%; height: 38px">
                            <option value="" >Choose gallery</option>
                                @foreach ($galleries as $gallery)
                                    <option value="{{ $gallery->id }}"{{old('gallery_id',$galleryPhoto->gallery_id) == $gallery->id ? 'selected': ''}}>{{ $gallery->title }}</option>
                                @endforeach


                        </select>
                        <span class="text-warning">
                            @error('gallery_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Gallery Image<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="files" type="file" name="files[]" multiple>
                        <span class="text-warning">
                            @error('image')
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
        <div class="grid grid-cols-4 gap-2" style="margin-top:30px;">
            <div class="col-md-12 row">
                @foreach ($galleryPhoto->files as $file)
                    <div class="col-md-3 d-flex flex-column align-items-center mb-4">
                        <img src="{{ $file->file_url }}" height="200" width="200" alt=""
                            class="rounded shadow mb-3">
                        <form action="{{ route('file.destroy', $file) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger d-flex align-items-center"
                                onclick="return confirm('Are you sure you want to delete this file?')">
                                <i class="fas fa-trash-alt me-2"></i> Delete
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>


        </div>
      

    </div>
@endsection
