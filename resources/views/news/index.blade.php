@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')

<section class="py-20 bg-white border-t border-gray-200" id="berita">
    <div class="container mx-auto px-4 mb-3">
        <div class="text-center mb-20"> <!-- Menambahkan margin bawah -->
            <h1 class="text-5xl font-extrabold text-gray-800 mb-12 text-center opacity-80 hover:opacity-100 transition-all duration-300">Berita Terbaru</h1>
            <p class="text-2xl text-gray-600 mb-6 text-center italic opacity-80 hover:opacity-100 transition-all duration-300">Dapatkan informasi terbaru dan berita terkini dari kami.</p>

        </div>

        <div class="relative">
            <!-- Grid dengan responsif kolom yang lebih kecil -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pb-6">
                @foreach ($newsItems as $news)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                    <img src="{{ asset('storage/folder-berita/' . $news->image) }}" alt="{{ $news->title }}"
                         class="w-full object-cover" style="height: 250px;">
                    <div class="p-6 flex flex-col justify-between flex-grow">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">{{ $news->title }}</h3>
                        <p class="text-gray-600 mb-4 flex-grow">{{ Str::limit($news->content, 150) }}</p>
                        <a href="{{ route('news.detail', $news->id) }}"
                           class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
