@extends('frontend.layouts.app')

@section('title', 'Course')

@section('content')
@include('frontend.pages.courses.section.banner')
@include('frontend.pages.courses.section.gallary')
<script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
<script>
    // MIXITUP 
    var containerEl = document.querySelector('.mix-filter');
    var mixer = mixitup(containerEl);

</script>

@endsection
<!------------ JS HERE ------------>
