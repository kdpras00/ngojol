   <!-- Hero Section -->
<div class="relative bg-cyan-500 min-h-screen flex items-center" id="beranda">
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-600 to-cyan-400 opacity-90"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-20 md:py-32">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white ml-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Layanan Antar Jemput
                    Terpercaya</h1>
                <p class="text-xl mb-8 opacity-90" style="font-family: 'Arial', sans-serif;">Nikmati
                    pengalaman
                    pengiriman yang aman, cepat, dan terpercaya
                    dengan Ngojol</p>
                <div class="flex space-x-4">
                    <button
                        class="bg-white hover:bg-cyan-500 text-black font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105"
                        onclick="event.preventDefault(); document.getElementById('download').scrollIntoView({ behavior: 'smooth' });">
                        <img src="{{ asset('storage/download.png') }}" alt="download" class="h-6 inline"
                            style="margin-right: 8px; margin-bottom: 5px;">
                        <span style="font-family: 'Arial', sans-serif;">DOWNLOAD APLIKASI</span>
                    </button>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="{{ asset('storage/ngojol.png') }}" alt="aplikasi-ngojol"
                    class="w-full max-w-md mx-auto transform hover:scale-105 transition duration-500 rounded-3xl shadow-2xl">
            </div>
        </div>
    </div>
</div>