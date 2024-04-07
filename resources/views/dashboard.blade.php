@extends('layouts.app')



@section('content')
    <!-- End header area -->

            <div class="col-xl-9 col-lg-9 col-md-8">



                <div class="row dashboard-content">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-dash-head">
                            <div class="dashboard-amount">
                                <div class="amount-content">
                                    <span class="pro-name">Balance</span>
                                    <span class="pro-money">${{ $wallets->balance }}</span>
                                </div>
                                <div class="invest-tumb">
                                    <i class="flaticon-035-savings"></i>
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-dash-head">
                            <div class="dashboard-amount">
                                <div class="amount-content">
                                    <span class="pro-name">Bonus</span>
                                    <span class="pro-money">${{ $wallets->bonus }}</span>
                                </div>
                                <div class="invest-tumb">
                                    <i class="flaticon-041-umbrella"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-dash-head">
                            <div class="dashboard-amount">
                                <div class="amount-content">
                                    <span class="pro-name">Profit</span>
                                    <span class="pro-money">${{ $wallets->profit }}</span>
                                </div>
                                <div class="invest-tumb">
                                    <i class="flaticon-004-bar-chart"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </div>
    </div>




@endsection
