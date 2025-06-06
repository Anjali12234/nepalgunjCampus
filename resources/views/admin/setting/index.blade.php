@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>System Setting</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                System Setting
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form method="post" action="{{ route('admin.systemSetting.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">


                    <div class="form-group col-md-6">
                        <label for="name">Name<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="name" name="name"
                            value="{{ old('name', $systemSetting?->name) }}" placeholder="Title" type="text" />
                        <span class="text-warning">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address<span style="color: red; margin-left: 5px;">*</span> </label>
                        <input class="form-control" id="address" name="address" type="text"
                            value="{{ old('address', $systemSetting?->address) }}" placeholder="Address" />
                        <span class="text-warning">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="phone_number">Phone Number<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="phone_number" name="phone_number" type="text"
                            value="{{ old('phone_number', $systemSetting?->phone_number) }}" placeholder="Phone Number" />
                        <span class="text-warning">
                            @error('phone_number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telephone_number">Telephone Number<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="telephone_number" name="telephone_number" type="text"
                            value="{{ old('telephone_number', $systemSetting?->telephone_number) }}" placeholder="Phone Number" />
                        <span class="text-warning">
                            @error('telephone_number')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="email" name="email" type="text"
                            value="{{ old('email', $systemSetting?->email) }}" placeholder="Email" />
                        <span class="text-warning">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                  

                </div>

                <div class="col-md-12 row">


                    <div class="form-group col-md-6">
                        <label for="logo1">Logo</label>
                        <img src="{{ $systemSetting?->logo1 }}" height="100" width="100" alt="">

                        <input class="form-control" id="logo1" name="logo1" type="file"
                            value="{{ old('logo1', $systemSetting?->logo1) }}" />
                        <span class="text-warning">
                            @error('logo1')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="logo2">Thumbnail</label>
                        <img src="{{ $systemSetting?->logo2 }}" height="100" width="100" alt="">

                        <input class="form-control" id="logo2" name="logo2" type="file"
                            value="{{ old('logo2', $systemSetting?->logo2) }}" />
                        <span class="text-warning">
                            @error('logo2')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                </div>
                <div class="col-md-12">

                    <div class="form-group">
                        <label for="instagram_url">Instagram </label>
                        <input class="form-control" name="instagram_url" id="instagram_url"
                            value="{{ old('instagram_url', $systemSetting?->instagram_url) }}" type="text"
                            placeholder="Instagram Url">
                        <span class="text-warning">
                            @error('instagram_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="facebook_url">Facebook </label>
                        <input class="form-control" name="facebook_url" id="facebook_url"
                            value="{{ old('facebook_url', $systemSetting?->facebook_url) }}" type="text"
                            placeholder="Facebook Url">
                        <span class="text-warning">
                            @error('facebook_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="twitter_url">Twitter </label>
                        <input class="form-control" name="twitter_url" id="twitter_url"
                            value="{{ old('twitter_url', $systemSetting?->twitter_url) }}" type="text"
                            placeholder="Twitter Url">
                        <span class="text-warning">
                            @error('twitter_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="youtube_url">Youtube </label>
                        <input class="form-control" name="youtube_url" id="youtube_url"
                            value="{{ old('youtube_url', $systemSetting?->youtube_url) }}" type="text"
                            placeholder="Youtube Url">
                        <span class="text-warning">
                            @error('youtube_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="map_url">Map </label>
                        <input class="form-control" name="map_url"
                            id="map_url"value="{{ old('map_url', $systemSetting?->map_url) }}" type="text"
                            placeholder="Map Url">
                        <span class="text-warning">
                            @error('map_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="footer_description">Footer Description<span style="color: red; margin-left: 5px;">*</span></label>
                   <textarea name="footer_description" id="editor" cols="30" rows="10">{{old('footer_description',$systemSetting?->footer_description)}}</textarea>
                    <span class="text-warning">
                        @error('footer_description')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
