@extends('layout.app')

@section('body')
<div id="wrapper">
    <div id="page" class="">
        <div class="wrap-login-page">
            <div class="flex-grow flex flex-column justify-center gap30">
                <a href="/" id="site-logo-inner">
                    <h3 class="text-center">Admin Portfolio</h3>
                </a>
                <div class="login-box">
                    <h3>Login to account</h3>
                    <form action="{{ route('login.post') }}" method="POST" class="form-login flex flex-column gap24">
                        @csrf
                        <fieldset class="email">
                            <div class="body-title mb-10">Email address <span class="tf-color-1">*</span></div>
                            <input class="flex-grow" type="email" placeholder="Enter your email address" name="email" value="{{ old('email') }}" aria-required="true" required="">
                            @error('email')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>
                        <fieldset class="password">
                            <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                            <input class="password-input" type="password" placeholder="Enter your password" name="password" tabindex="0" value="" aria-required="true" required="">
                            
                            <span class="show-pass">
                                <i class="icon-eye view"></i>
                                <i class="icon-eye-off hide"></i>
                            </span>
                            @error('password')
                                <p class="error text-danger">{{ $message }}</p>
                            @enderror
                        </fieldset>
                        <div class="flex justify-between items-center">
                            <a href="{{ url('/forgot-password') }}" class="body-text tf-color">Forgot password?</a>
                        </div>
                        <button type="submit" class="tf-button w-full">Login</button>
                    </form>
                    <div class="body-text text-center">
                        You don't have an account yet?
                        <a href="{{ url('/sign-up') }}" class="body-text tf-color">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="text-tiny">Copyright © 2024 innak, All rights reserved.</div>
        </div>
    </div>
</div>
@endsection
