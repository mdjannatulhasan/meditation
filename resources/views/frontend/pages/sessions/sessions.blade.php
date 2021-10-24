@extends('frontend.layouts.app')

@section('title', 'Sessions')


@section('content')
@include('frontend.pages.sessions.section.banner')
@include('frontend.pages.sessions.section.gallery')

<script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
<script>
    
    // MIXITUP 
    var containerEl = document.querySelector('.mix-filter');
    var mixer = mixitup(containerEl);

</script>
@endsection