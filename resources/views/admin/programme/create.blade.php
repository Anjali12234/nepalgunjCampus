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
            <form method="post" action="{{ route('admin.programme.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="programme_short_name">Programme Short Name<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="programme_short_name" name="programme_short_name" type="text"
                            value="{{ old('programme_short_name') }}" />
                        <span class="text-warning">
                            @error('programme_short_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="programme_full_name">Programme Full Name<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="programme_full_name" name="programme_full_name" type="text"
                            value="{{ old('programme_full_name') }}" />
                        <span class="text-warning">
                            @error('programme_full_name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="university">University<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="university" name="university" type="text"
                            value="{{ old('university') }}" />
                        <span class="text-warning">
                            @error('university')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="years">Years<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="years" name="years" type="number"
                            value="{{ old('years') }}" />
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
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">programme  List</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S.No</th>
                        <th>Title </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($programmes as $key => $programme)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>{{ $programme->programme_short_name }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.programme.edit', $programme) }}"><i
                                                class="dw dw-edit2"></i> Edit</a>

                                        <form action="{{ route('admin.programme.destroy', $programme) }}" method="post"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Are You sure want to delete')"> <i
                                                    class="dw dw-delete-3"></i>Delete </button>

                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $programmes->links() }}
            </div>
        </div>

    </div>
@endsection
