@extends('admin.layouts.default')

@php
$folder = 'surat';
@endphp

@section('title-page', $folder)
@section('title', $folder)

@section('css')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@endsection

@section('title-right')
    <button type="button" class="btn btn-outline-primary" id="tambah">Tambah Data</button>
@endsection

@section('content')
    <div id="route" style="display: none"><?= $folder ?></div>
    <div class="col-12">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <table id="my_table" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Surat</th>
                            <th>Tgl. Surat</th>
                            <th>Perihal</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
@endsection
@include("admin.$folder.form")

@section('scripts')
    <script src="{{ mix('js/crud.js') }}"></script>
    <script src="{{ mix('js/components.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $('#my_table').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [1, 'asc']
            ],
            ajax: `/crud/${route.textContent}`,
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'no_surat',
                },
                {
                    data: 'tgl_surat',
                },
                {
                    data: 'perihal',
                },
                {
                    data: 'file_surat',
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endsection