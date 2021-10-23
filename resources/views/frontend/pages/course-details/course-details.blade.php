@extends('frontend.layouts.app')

@section('title', 'Course Details')

@include('frontend.include.header')

@section('content')


@include('frontend.pages.course-details.section.banner')

@include('frontend.pages.course-details.section.deepest-self')

@include('frontend.pages.course-details.section.review')


@endsection