@extends('layouts.guest')


@section('content')
    <!-- End header area -->
    <main>
        <!-- Start intro area -->
        <div class="intro-area intro-home">
            <div class="bg-wrapper">
                <img src="img/background/bg4.jpg" alt="">
            </div>
            <div class="intro-content">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="slide-all-text">
                                    <!-- layer 1 -->
                                    <div class="mb-4 text-sm text-gray-600">
                                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                    </div>

                                    <x-auth-session-status class="mb-4" :status="session('status')" />


                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-input-label for="email" :value="__('Email')" />
                                            <input type="email" id="email" class="form-control"
                                            name="email" :value="old('email')"  placeholder="Your Email" required data-error="Please enter your name">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <x-primary-button class="app-btn" >
                                                {{ __('Email Password Reset Link') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="slide-images-inner wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="slide-images">
                                        <img src="img/slider/s1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End intro Area -->

        <!-- End Counter area -->
        <!-- Start About Area -->

        <!-- End About Area -->
        <!-- Start Investment area -->


        <!-- End Subscribe area -->
    </main>
@endsection
