@extends('frontend.layouts.app')

@section('title', 'Shop')

@include('frontend.include.header')


@section('content')
@include('frontend.pages.shop.section.banner')
@include('frontend.pages.shop.section.shop-content')


<script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
<script>
    // MIXITUP 
    var containerEl = document.querySelector('.mix-filter');
    var mixer = mixitup(containerEl);

</script>
@endsection

