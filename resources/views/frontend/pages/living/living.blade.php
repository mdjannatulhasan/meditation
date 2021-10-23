@extends('frontend.layouts.app')

@section('title', 'Living')
    
@include('frontend.include.header')

@section('content')
@include('frontend.pages.living.section.banner')
@include('frontend.pages.living.section.stress')
    
@endsection