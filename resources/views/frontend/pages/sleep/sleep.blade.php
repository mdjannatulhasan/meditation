@extends('frontend.layouts.app')

@section('title', 'Sleep')
    
@include('frontend.include.header')

@section('content')
@include('frontend.pages.sleep.section.banner')
@include('frontend.pages.sleep.section.sleep-content')
@endsection