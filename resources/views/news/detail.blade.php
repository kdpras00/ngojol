@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')

<div class="container mx-auto px-4 py-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-4 mt-10">{{ $news->title }}</h1>
        <img src="{{ asset('storage/folder-berita/' . $news->image) }}" alt="{{ $news->title }}" class="w-full mb-4" style="height : 500px">
        <p class="text-lg text-gray-700">{{ $news->content }}</p>
    </div>
</div>

@endsection
