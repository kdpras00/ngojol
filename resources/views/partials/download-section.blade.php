   <!-- Download App Section -->
   <section class="py-20 bg-cyan-500 border-t border-gray-200" id="download">
    <div class="container mx-auto px-4 mb-10">
        <div class="flex flex-col md:flex-row items-center justify-center md:justify-between">
            <div class="w-full md:w-2/4 lg:w-3/4 mt-8">
                <img src="img/maps-ngojol.png" alt="aplikasi-ngojol"
                    class="w-full max-w-md mx-auto transform hover:scale-105 transition duration-500 rounded-3xl shadow-2xl">
            </div>
            <div class="text-left mb-8 md:mb-0 md:w-1/2 lg:w-3/5" id="download-section">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Download Aplikasi Kami</h2>
                <p class="text-lg text-white mb-6">Dapatkan pengalaman terbaik dengan aplikasi kami yang
                    mudah
                    digunakan dan cepat.</p>
                    <div class="flex justify-start space-x-4" id="download-section">
                        <a href="https://play.google.com/store" target="_blank">
                            <img src="img/playstore-logo.png" alt="playstore" class="h-20 transition-transform duration-300 hover:scale-110">
                        </a>
                        <a href="https://www.apple.com/app-store/" target="_blank">
                            <img src="{{ asset('storage/appstore-logo.png') }}" alt="appstore" 
                            class="h-20 transition-transform duration-300 hover:scale-110">
                        </a>
                    </div>
                    
            </div>
            <script>
                const downloadSection = document.getElementById('download-section');
                window.addEventListener('scroll', function() {
                    const rect = downloadSection.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        downloadSection.style.opacity = 1;
                        downloadSection.style.transition = 'opacity 2s ease-in-out';
                    } else {
                        downloadSection.style.opacity = 0;
                        downloadSection.style.transition = 'opacity 2s ease-in-out';
                    }
                });
            </script>
        </div>
    </div>
</section>
<!-- End Download App Section -->