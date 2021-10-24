@extends('frontend.layouts.app')

@section('title', 'Event Details')


@section('content')

@include('frontend.pages.event-details.section.banner')
@include('frontend.pages.event-details.section.event-detais-content')
    
@endsection