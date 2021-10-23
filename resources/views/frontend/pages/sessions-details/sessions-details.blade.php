@extends('frontend.layouts.app')

@section('title', 'Sesssions Details')
    
@include('frontend.include.header')

@section('content')
@include('frontend.pages.sessions-details.section.banner')
@include('frontend.pages.sessions-details.section.mama-goddes')
@include('frontend.pages.sessions-details.section.reviews')
@endsection

   