@extends('auth.default')

@section('title-page', 'Login')

@section('content')
    <div class="col-xxl-3 col-lg-4 col-md-5">
        <div class="auth-full-page-content d-flex p-sm-5">
            <div class="w-100">
                <div class="d-flex flex-column h-100">
                    <div class="mb-0 text-center">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                        <a href="index.php" class="d-block auth-logo">
                            <img src="{{ asset('assets/images/gidi 2019.png') }}" alt="" height="28"> <span
                                class="logo-txt">GRATIA WAENA</span>
                        </a>
                    </div>
                    <div class="auth-content my-auto">
                        <div class="text-center">
                            <h5 class="mb-0">SELAMAT DATANG !</h5>
                            <p class="text-muted mt-2">SISTEM INFORMASI PENGARSIPAN SURAT MASUK DAN SURAT KELUAR</p>
                        </div>
                        {{-- error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger text-center">
                                <span class="">Kombinasi Email dan Password Salah</span>
                            </div>
                        @endif
                        <form class="custom-form mt-4 pt-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter username">
                            </div>
                            <div class="mb-3">

                                <label for="password" class="form-label">Password</label>

                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" class="form-control" placeholder="Enter password"
                                        aria-label="Password" id="password" name="password"
                                        aria-describedby="password-addon">
                                    <button class="btn btn-light ms-0" type="button" id="password-addon"><i
                                            class="mdi mdi-eye-outline"></i></button>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end auth full page content -->
    </div>
@endsection
