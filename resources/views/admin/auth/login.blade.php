@extends('admin.auth.master')
@section('content')
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg"
                                    height="36" alt=""></a>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Login to your account</h2>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('admin.login.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" name="email"
                                            :value="old('email')" autofocus autocomplete="username" />
                                        <x-admin.input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label class="form-label" for="password" :value="__('Password')" />

                                        <div class="input-group input-group-flat">
                                            <x-text-input id="password" class="form-control" type="password"
                                                name="password" autocomplete="current-password" />
                                        </div>
                                        <x-admin.input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="form-footer">
                                        <x-primary-button class="btn btn-primary w-100">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="./static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1692870487" defer></script>
    <script src="./dist/js/demo.min.js?1692870487" defer></script>
@endsection
