@extends('layout.app')

@section('body')
<div id="wrapper">
    <div id="page" class="">
        <div class="wrap-login-page sign-up">
            <div class="flex-grow flex flex-column justify-center gap30">
                <a href="/" id="site-logo-inner">
                    <h3 class="text-center">Admin Portfolio</h3>
                </a>
                <div class="login-box">
                    <div>
                        <h3>Create your account</h3>
                        <div class="body-text">Enter your personal details to create account</div>
                    </div>
                    <form action="{{ secure_asset(route('register.post')) }}" method="POST" class="form-login flex flex-column gap24">
                        @csrf
                        <fieldset class="name">
                            <div class="body-title mb-10">Your username <span class="tf-color-1">*</span></div>
                            <div class="flex gap10">
                                <input class="flex-grow" type="text" placeholder="Full name" name="name" value="{{ old('name') }}" aria-required="true" >
                            </div>
                            @error('name')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>
                        <fieldset class="email">
                            <div class="body-title mb-10">Email address <span class="tf-color-1">*</span></div>
                            <input class="flex-grow" type="email" placeholder="Enter your email address" name="email" value="{{ old('email') }}" aria-required="true" required="">
                            @error('email')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>
                        <fieldset class="password">
                            <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                            <input class="password-input" type="password" placeholder="Enter your password" name="password" aria-required="true" required="">
                            @error('password')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                            <span class="show-pass">
                                <i class="icon-eye view"></i>
                                <i class="icon-eye-off hide"></i>
                            </span>
                        </fieldset>
                        <fieldset class="password">
                            <div class="body-title mb-10">Confirm password <span class="tf-color-1">*</span></div>
                            <input class="password-input" type="password" placeholder="Confirm your password" name="password_confirmation" aria-required="true" required="">
                            @error('password_confirmation')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                            <span class="show-pass">
                                <i class="icon-eye view"></i>
                                <i class="icon-eye-off hide"></i>
                            </span>
                        </fieldset>
                        <button type="submit" class="tf-button w-full">Register</button>
                    </form>
                    <div class="body-text text-center">
                        You have an account?
                        <a href="{{ url('/login') }}" class="body-text tf-color">Login Now</a>
                    </div>
                </div>
            </div>
            <div class="text-tiny">Copyright © 2024 innak, All rights reserved.</div>
        </div>
    </div>
</div>
@endsection
