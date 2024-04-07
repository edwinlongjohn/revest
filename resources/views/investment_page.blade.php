@extends('layouts.app')

@section('content')

  <!-- Start Investment area -->
  <div class="invest-area bg-color-2 area-padding-2">
    <div class="container">
        <div class="row">
           <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-headline text-center">
                    <h2>Investment plan</h2>
                    <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                </div>
            </div>
       </div>
       <div class="row">
        @foreach ($package as $item)
        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="pri_table_list text-center">
                <div class="top-price-inner">
                    <h3>{{ $item->plan }} </h3>
                    <div class="rates">
                        <span class="prices">{{ $item->weekly_avg }}%</span><span class="users">Weekly</span>
                    </div>
                </div>
                <ol class="pricing-text">
                    <li class="check">Minimam Invest : ${{ $item->min_invest }}</li>
                    <li class="check">Maximam Invest : ${{ $item->max_invest }}</li>
                    <li class="check">Avarage Monthly : {{ $item->monthly_avg }}% </li>
                </ol>
                <div class="price-btn">
                    <a class="blue" href="#">Invest Now</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    </div>
</div>
<!-- End Investment area -->


@endsection
