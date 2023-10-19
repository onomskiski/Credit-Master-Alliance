<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Create an account for you') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>


{{-- @extends('layouts.auth')    
@section('content')

<form method="POST" action="{{ route('login') }}"  class="mt-4 login-form">
    @csrf
    <input type="hidden" name="_token" value="LJxdXQ7eOVmbhxqvWzvzzCbwzhfflcNgubSnkU87">                                <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Your Email <span class="text-danger">*</span></label>
                <div class="position-relative">
                    <i data-feather="mail" class="fea icon-sm icons"></i>
                    <input type="email" class="pl-5 form-control" name ="email" value="" id="email" :value="old('email')" autofocus autocomplete="username" required>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-lg-12">
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <div class="position-relative">
                    <i data-feather="key" class="fea icon-sm icons"></i>
                    <input type="password" class="pl-5 form-control" name="password" id="password" placeholder="Enter Password" required>
                </div>
            </div>
        </div>
        <!--end col-->

        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"
                            id="customCheck1" name="remember">
                        <label class="custom-control-label" for="customCheck1">Remember
                            me</label>
                    </div>
                </div>
                <p class="mb-0 forgot-pass"><a href="forgot-password.html"
                        class="text-dark font-weight-bold">Forgot password ?</a></p>
            </div>
        </div>
        <!--end col-->

        <div class="mb-0 col-lg-12">
                
        </div>
        <!--end col-->

        <div class="mt-4 text-center col-lg-12">
                                                </div>
        <!--end col-->
        <!--end col-->

        <div class="text-center col-12">
            <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account
                    ?</small> <a href="register.html"
                    class="text-dark font-weight-bold">Sign Up</a></p>
        </div>
        <!--end col-->
        
        <div class="text-center col-12">
            <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2023 &nbsp; 247Cointrading &nbsp; All Rights Reserved.</small>
            </p>
        </div>
    </div>
    <!--end row-->
</form>
@endsection --}}