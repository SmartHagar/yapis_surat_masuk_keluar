@extends('admin.layouts.default')

@php
$folder = 'dashboard';
@endphp

@section('title-page', $folder)
{{-- @section('title', $folder) --}}

@section('content')
    <div class="col-12">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <h3 class="text-center animate__animated animate__backInUp">Selamat Datang Admin</h3>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
@endsection
