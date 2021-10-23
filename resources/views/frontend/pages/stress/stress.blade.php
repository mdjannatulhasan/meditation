@extends('frontend.layouts.app')

@section('title', 'Stress')

@include('frontend.include.header')

@section('content')
@include('frontend.pages.stress.section.banner')
@include('frontend.pages.stress.section.stress-content')
@endsection