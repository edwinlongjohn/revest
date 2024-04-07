@extends('layouts.guest')



@section('content')
    <main>
        <div class="login-area area-padding fix">
            <div class="login-overlay"></div>
            <div class="container">
                <div class="row justify-content-center text-center ">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="login-form signup-form">
                            <h4 class="login-title text-center">REGISTER</h4>
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div>

                                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                                        :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">

                                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                        required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">


                                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="app-btn">
                                        {{ __('Reset Password') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
