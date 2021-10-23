@extends('frontend.layouts.app')

@section('title', 'Detox')

@include('frontend.include.header')

@section('content')
    
@include('frontend.pages.detox.section.banner')
@include('frontend.pages.detox.section.detox-content')

@endsection