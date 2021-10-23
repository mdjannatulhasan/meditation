@extends('frontend.layouts.app')

@section('title', 'Focuse')

@include('frontend.include.header')
    
@section('content')

@include('frontend.pages.focuse.section.banner')
@include('frontend.pages.focuse.section.stress')

@endsection