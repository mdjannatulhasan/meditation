@extends('frontend.layouts.app')

@section('title', 'About-us')
@include('frontend.include.header')

@section('content')

@include('frontend.pages.about.section.banner')

@include('frontend.pages.about.section.about-content')



@endsection
