@extends('auth.master')

{{-- 
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<section class="wsus__sign_in">
    <div class="row">
        <div class="col-xxl-5 col-xl-6 col-lg-6">
            <div class="wsus__sign_img">
                <img src="{{ asset('enduser/assets') }}/images/login_img_1.jpg" alt="login" class="img-fluid">
                <a href="index.html">
                    <img src="{{ asset('enduser/assets') }}/images/logo.png" alt="EduCore" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 m-auto">
            <div class="wsus__sign_form_area">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2>Log in<span>!</span></h2>
                            <p class="new_user">New User ? <a href="sign_up.html">Create an Account</a></p>
                            <div class="row">
                                <!-- Email Address -->
                                <div class="col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email"
                                            name="email" :value="old('email')" required autofocus
                                            autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mt-4 col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <label for="password">Password* <a href="#">Forgot Password?</a></label>

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="block mt-4 col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember Me
                                            </label>
                                            <button type="submit" class="common_btn">Sign In</button>

                                        </div>
                                    </div>
                                </div>
                        </form>
                        <p class="create_account">
                            Don't have an account?
                            <a href="sign_up.html">Create free account</a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <form action="#">
                            <h2>Log in<span>!</span></h2>
                            <p class="new_user">New User ? <a href="sign_up.html">Create an Account</a></p>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <label>Email or Username*</label>
                                        <input type="text" placeholder="Email or Username">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <label>Email or Username* <a href="#">Forgot Password?</a></label>
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="wsus__login_form_input">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                Remember Me
                                            </label>
                                        </div>
                                        <button type="submit" class="common_btn">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or">or</p>
                        <ul class="social_login d-flex flex-wrap">
                            <li>
                                <a href="#">
                                    <span><img src="{{ asset('enduser/assets') }}/images/google_icon.png" alt="Google"
                                            class="img-fluid"></span>
                                    Google
                                </a>
                            </li>
                        </ul>
                        <p class="create_account">Don't have an account? <a href="sign_up.html">Create free
                                account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
