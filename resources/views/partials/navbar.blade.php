<nav class="fixed w-full z-50 transition-all duration-300 bg-cyan-500" id="navbar">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center ml-4">
                <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('storage/delivery.png') }}" alt="fast-delivery" class="h-12 ml-4"
                            style="filter: brightness(0) invert(1);">
                        <h1 style="font-family: 'Poppins', sans-serif; font-size: 2rem; margin-left: 14px;"
                            id="navbar-title" class="text-white">
                            NG-OJOL
                        </h1>
                    </div>
                </a>
            </div>
            <!-- Links -->
            <div class="hidden md:flex items-center space-x-1" id="href-navbar">
                <a href="{{ url('/') }}#fitur"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Fitur</a>
                <a href="{{ url('/') }}#layanan"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Layanan</a>
                <a href="{{ url('/') }}#review"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Review</a>
                <a href="{{ url('/') }}#download"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Download</a>
                <a href="{{ route('news.index') }}"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Berita</a>
                <a href="{{ url('/') }}#faq"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">FAQ</a>
                <a href="{{ url('/') }}#hubungi"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Hubungi
                    Kami</a>
                <a href="{{ url('/pendaftaran-driver-baru') }}">
                    <button class="bg-white text-black px-6 py-2 rounded-full hover:bg-cyan-600 transition duration-300"
                        id="daftar-driver-button">Daftar Driver</button>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Bagian Konten -->
<div id="fitur"> <!-- Konten Fitur --> </div>
<div id="layanan"> <!-- Konten Layanan --> </div>
<div id="review"> <!-- Konten Review --> </div>
<div id="download"> <!-- Konten Download --> </div>
<div id="faq"> <!-- Konten FAQ --> </div>
<div id="hubungi"> <!-- Konten Hubungi Kami --> </div>
