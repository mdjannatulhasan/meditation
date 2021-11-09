@extends('frontend.layouts.app')

@section('title', 'Tryouts')

@section('content')
<section class="same-bg">
    <div class="container">
        <div class="same-bg-text tc">
            <h1 class="ps-700 c00 s38">Tryouts</h1>
            <ul class="d-flex align-items-center justify-content-center">
                <li><a href="{{ asset('') }}" class="ps-700 cff s18">Home</a></li>
                <li class="ps-700 cff s18">|</li>
                <li><a href="javascript:void(0)" class="ps-700 cb6 s18">Tryouts</a></li>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div id="Paris" class="tabcontent gallary-tab-video tryout">
            <div class="row g-5">
                @foreach ($tryouts as $tryout)
                <div class="col-md-4 col-sm-6">
                    <div class="tryout-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/{{ $tryout->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="tryouts-title">
                        {{--  <p class="ps-400 s12 c86">Text</p>
                        <p class="ps-400 s12 c86">10:23min</p>  --}}
                        <h4>{{ $tryout->heading }}</h4>
                        <p>with {{ $tryout->trainner }}</p>
                    </div>
                    <div class="description">
                        <p>
                            {!! $tryout->description !!}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
