@extends('frontend.layouts.app')

@section('title', 'Meditation')

@section('content')
<section class="same-bg">
    <div class="container">
        <div class="same-bg-text tc">
            <h1 class="ps-700 c00 s38">Our Meditation</h1>
            <ul class="d-flex align-items-center justify-content-center">
                <li><a href="index.html" class="ps-700 cff s18">Home</a></li>
                <li class="ps-700 cff s18">|</li>
                <li><a href="javascript:void(0)" class="ps-700 cb6 s18">Meditation</a></li>
            </ul>
        </div>
    </div>
</section>
@foreach ($data as $row)
<section class="gellary-section py-100">
    <div class="container">
        <div class="filtering-btn">
            <button type="button" class="ps-700 c00 s23" data-filter="all">{{ $row->title }}</button>
        </div>
        <div class="row gx-4 gy-5 mix-filter">
            @foreach ($row->meditations as $meditation)
            <div class="col-lg-4 col-sm-6 mix live upcoming-events">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset( $meditation->image )}}" alt="featured events" class="img">
                        <p class="ps-700 s14 cff fe-live-date fe-date tc">Mon - 07:00 pm</p>
                    </div>
                    <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $meditation->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {!! $meditation->description !!}
                            </p>
                        </div>
                        <div class="featured-events">
                            <a href="" class="primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach
@endsection
