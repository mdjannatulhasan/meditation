@extends('frontend.layouts.app')

@section('title', 'Events')
    
@include('frontend.include.header')

@section('content')
@include('frontend.pages.events.section.banner')
@include('frontend.pages.events.section.gellary')
@endsection