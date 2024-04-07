@extends('layouts.guest')


@section('content')

<main>

    <div class="feature-area bg-color-2 fix area-padding">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-inner">
                        <div class="left-headline">
                            <h2>Our apps of your mobile for any update</h2>
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                        </div>
                        <div class="down-btn">
                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <x-primary-button class="app-btn" >
                                            {{ __('Resend Verification Email') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-content">
                        <div class="feature-images">
                            <img src="img/feature/f2.png" alt="" class="first-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
