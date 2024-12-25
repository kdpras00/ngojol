@extends('layouts.main')

@section('navbar')
    @include('partials.navbarHome')
@endsection


@section('content')
    @include('partials.hero-section')
    @include('partials.fitur-section')
    @include('partials.layanan-section')
    @include('partials.review-section')
    @include('partials.download-section')
    @include('partials.portfolioPartner-section')
    @include('partials.faq-section')
    @include('partials.hubungiKami-section')
    @include('partials.footer')
@endsection