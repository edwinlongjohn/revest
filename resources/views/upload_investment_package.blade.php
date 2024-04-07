@extends('layouts.admin_dashboard')

@section('content')

<div class="login-area area-padding fix">
    <div class="login-overlay"></div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="login-form signup-form">
                    <h4 class="login-title text-center">Upload Details</h4>
                    <form method="POST" action="{{ route('add.investment.package') }}" class="log-form"> @csrf
                         @foreach ($errors->all() as $error)
                            <p class="text-danger text-center">{{ $error }}</p>
                        @endforeach

                        <input type="text" name="plan" id="plan" class="form-control"
                            placeholder=" Investment Plan" required data-error="Please enter your name">


                        <input type="number" name="min_invest" id="min_invest" class="form-control" placeholder="Minimum Amount"
                            required data-error="Please enter your Minimum Amount">




                        <input type="number" name="max_invest" id="max_invest" class="form-control"
                            placeholder="Maximum Amount" required data-error="Please enter your message subject">

                        <input type="number" name="monthly_avg" id="monthly_avg"
                            class="form-control" placeholder="Monthly Average " required
                            data-error="Please enter your message subject">

                            <input type="number" name="weekly_avg" id="weekly_avg"
                            class="form-control" placeholder="Weekly Average " required
                            data-error="Please enter your message subject">

                        <button type="submit" id="submit" class="slide-btn login-btn">Upload</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
