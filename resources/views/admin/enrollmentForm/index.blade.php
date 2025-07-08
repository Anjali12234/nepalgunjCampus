@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Entrance Class Form </h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Entrance Class Form
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a href="{{ route('admin.enrollmentForm.export.csv') }}" class="btn btn-success">
                            Export CSV
                        </a>


                    </div>
                </div>
            </div>
        </div>

        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4"> Entrance Class Form Lists</h4>

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap" id="enrollmentTable">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>
                            <th>Full Name</th>
                            <th>Email </th>
                            <th>Phone </th>
                            <th>Status </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enrollmentForms as $key => $enrollmentForm)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>

                                <td>{{ $enrollmentForm->name }}</td>
                                <td>{{ $enrollmentForm->email }}</td>
                                <td>{{ $enrollmentForm->phone_no }}</td>
                                <td>
                                    <form action="{{ route('admin.enrollmentForm.updateStatus', $enrollmentForm) }}"
                                        method="post" style="display: inline">
                                        @csrf
                                        @method('put')
                                        <button type="submit" style="border: none; background: none;">
                                            <i
                                                class="fa fa-{{ $enrollmentForm->status == 1 ? 'toggle-on text-success' : 'toggle-off text-danger' }} fa-2x"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.enrollmentForm.show', $enrollmentForm) }}"><i
                                                    class="dw dw-view"></i>view</a>

                                            <form action="{{ route('admin.enrollmentForm.destroy', $enrollmentForm) }}"
                                                method="POST" style="display: inline">
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
                {{ $enrollmentForms->links() }}
            </div>
        </div>

    </div>

    <script>
        function exportTableToExcel(filename) {
            const table = document.getElementById("enrollmentTable");
            const html = table.outerHTML.replace(/ /g, '%20');

            const uri = 'data:application/vnd.ms-excel;charset=utf-8,' + html;
            const link = document.createElement("a");
            link.href = uri;
            link.download = filename;
            link.click();
        }
    </script>
@endsection
