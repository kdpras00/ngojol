<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngojol {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('bg-opacity-90', 'shadow-lg');
            } else {
                nav.classList.remove('bg-opacity-90', 'shadow-lg');
            }
        });

    </script>
    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>
</head>

<body class="font-[Canva Sans]">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center ml-4">
                    <a href="#beranda" class="flex-shrink-0 flex items-center">
                        <div class="flex items-center">
                            <img src="img/delivery.png" alt="fast-delivery" class="h-12 ml-4">
                            <h1 style="font-family: 'Font Analysis', sans-serif; font-size: 2rem; color: white; margin-left: 14px;"
                                id="navbar-title">
                                NG-OJOL
                            </h1>
                        </div>
                        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap"
                            rel="stylesheet">
                        <style>
                            #navbar-title {
                                font-family: 'Poppins', sans-serif;
                                font-size: 2.5rem;
                            }
                        </style>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="#fitur"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Fitur</a>
                    <a href="#layanan"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Layanan</a>
                    <a href="#review"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Review</a>
                    <a href="#download"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Download</a>
                    <a href="#berita"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Berita</a>
                    <a href="#faq"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">FAQ</a>
                    <a href="#hubungi"
                        class="px-3 py-2 text-white hover:text-slate-500 transition duration-300 navbar-link">Hubungi
                        Kami</a>
                    <a href="{{ url('/pendaftaran-driver-baru') }}">
                        <button
                            class="bg-[white] text-black px-6 py-2 rounded-full hover:bg-cyan-600 transition duration-300"
                            id="daftar-driver-button">Daftar Driver</button>
                    </a>
                    <script>
                        window.addEventListener('scroll', function () {
                            const button = document.getElementById('daftar-driver-button');
                            const beranda = document.getElementById('beranda');
                            const berandaHeight = beranda.offsetHeight;
                            if (window.scrollY < berandaHeight) {
                                button.style.backgroundColor = 'white'; // cyan-500
                                button.style.color = 'black';
                            } else {
                                button.style.backgroundColor = '#06b6d4'; // cyan-500
                                button.style.color = 'black';
                            }
                        });

                    </script>
                </div>
            </div>
        </div>
    </nav>
    <script>
        // Change navbar background and text color based on scroll position
        window.addEventListener('scroll', function () {
            const nav = document.getElementById('navbar');
            const beranda = document.getElementById('beranda');
            const berandaHeight = beranda.offsetHeight;
            const links = document.querySelectorAll('.navbar-link');
            const title = document.getElementById('navbar-title');
            if (window.scrollY < berandaHeight) {
                nav.style.backgroundColor = '#06b6d4'; // cyan-500
                links.forEach(link => link.style.color = 'white');
                title.style.color = 'white';
            } else {
                nav.style.backgroundColor = 'white';
                links.forEach(link => link.style.color = 'black');
                title.style.color = 'black';
            }
        });

    </script>

    </script>

    <!-- Hero Section -->
    <div class="relative bg-cyan-500 min-h-screen flex items-center" id="beranda">
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-600 to-cyan-400 opacity-90"></div>
        <div class="relative max-w-7xl mx-auto px-4 py-20 md:py-32">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white ml-4">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Layanan Antar Jemput Terpercaya</h1>
                    <p class="text-xl mb-8 opacity-90" style="font-family: 'Arial', sans-serif;">Nikmati pengalaman
                        pengiriman yang aman, cepat, dan terpercaya
                        dengan Ngojol</p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-white hover:bg-cyan-500 text-black font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105"
                            onclick="event.preventDefault(); document.getElementById('download').scrollIntoView({ behavior: 'smooth' });">
                            <img src="img/download.png" alt="playstore" class="h-6 inline"
                                style="margin-right: 8px; margin-bottom: 5px;">
                            <span style="font-family: 'Arial', sans-serif;">DOWNLOAD APLIKASI</span>
                        </button>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="img/ngojol.png" alt="aplikasi-ngojol"
                        class="w-full max-w-md mx-auto transform hover:scale-105 transition duration-500 rounded-3xl shadow-2xl">
                </div>
            </div>
        </div>
    </div>

    <!-- Fitur Section -->
    <section class="py-24 bg-cyan-500 border-t border-gray-200" id="fitur">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-white mb-4">Ngojol Membuatmu Aman dan Nyaman</h2>
            <p class="text-xl text-center text-white mb-12" style="font-family: 'Arial', sans-serif;">Kami Hadir Untuk
                Membuatmu Aman dan Nyaman</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Card 1 -->
                <div
                    class="bg-white p-16 rounded-2xl shadow-2xl hover:-translate-y-4 transition duration-300 transform hover:shadow-3xl">
                    <div class="text-center">
                        <div class="bg-orange-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-8">
                            <i class="fas fa-motorcycle text-5xl text-orange-500"></i>
                        </div>
                        <h3 class="text-3xl font-semibold mb-8">Pengiriman Cepat</h3>
                        <p class="text-gray-600" style="font-family: 'Arial', sans-serif;">Layanan pengiriman express
                            untuk kebutuhan mendesak Anda dengan jaminan
                            tepat waktu</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white p-16 rounded-2xl shadow-2xl hover:-translate-y-4 transition duration-300 transform hover:shadow-3xl">
                    <div class="text-center">
                        <div class="bg-orange-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-8">
                            <i class="fas fa-box text-5xl text-orange-500"></i>
                        </div>
                        <h3 class="text-3xl font-semibold mb-8">Pengiriman Barang</h3>
                        <p class="text-gray-600" style="font-family: 'Arial', sans-serif;">Kirim paket Anda dengan aman
                            ke seluruh kota dengan tracking real-time
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white p-16 rounded-2xl shadow-2xl hover:-translate-y-4 transition duration-300 transform hover:shadow-3xl">
                    <div class="text-center">
                        <div class="bg-orange-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-8">
                            <i class="fas fa-utensils text-5xl text-orange-500"></i>
                        </div>
                        <h3 class="text-3xl font-semibold mb-8">Pesan Makanan</h3>
                        <p class="text-gray-600" style="font-family: 'Arial', sans-serif;">Pesan makanan favorit Anda
                            dari berbagai restoran dengan pengiriman
                            cepat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->

    <section class="py-24 bg-white border-t border-gray-200" id="layanan">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-4">Layanan Ngojol</h2>
            <p class="text-xl text-center text-gray-600 mb-12" style="font-family: 'Arial', sans-serif;">Kami siap
                mengantar apa saja kebutuhanmu.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Card 1 -->
                <div class="flex flex-col items-center text-center mt-16 mb-16">
                    <div class="bg-cyan-500 w-24 h-24 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-biking text-5xl text-white"></i>
                    </div>
                    <h3 class="text-3xl font-semibold mb-6">Ngojol Express</h3>
                    <p class="text-gray-600 mb-12" style="font-family: 'Arial', sans-serif;">Layanan pengantaran dalam
                        kota dengan menggunakan motor untuk
                        mengantar apa
                        saja, dari mana saja, dengan pasti dan aman.</p>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col items-center text-center mt-16 mb-16">
                    <div class="bg-cyan-500 w-24 h-24 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-truck text-5xl text-white"></i>
                    </div>
                    <h3 class="text-3xl font-semibold mb-6">Ngojol Truk</h3>
                    <p class="text-gray-600 mb-12" style="font-family: 'Arial', sans-serif;">Layanan pengantaran dengan
                        menggunakan truk untuk mengantar apa saja
                        yang
                        berukuran besar dan banyak, kapan saja dengan aman dan mudah.</p>
                </div>

                <!-- Card 3 -->
                <div class="flex flex-col items-center text-center mt-16 mb-16">
                    <div class="bg-cyan-500 w-24 h-24 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-motorcycle text-5xl text-white"></i>
                    </div>
                    <h3 class="text-3xl font-semibold mb-6">Ngojol Motor</h3>
                    <p class="text-gray-600 mb-12" style="font-family: 'Arial', sans-serif;">Layanan transportasi dengan
                        menggunakan motor untuk menghadapi
                        kemacetan.
                        Pergi ke lokasi tujuanmu dengan cepat dan aman.</p>
                </div>

                <!-- Card 4 -->
                <div class="flex flex-col items-center text-center mt-16 mb-16">
                    <div class="bg-cyan-500 w-24 h-24 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-car text-5xl text-white"></i>
                    </div>
                    <h3 class="text-3xl font-semibold mb-6">Ngojol Mobil</h3>
                    <p class="text-gray-600 mb-12" style="font-family: 'Arial', sans-serif;">Layanan transportasi dengan
                        menggunakan mobil untuk menyajikan
                        kenyamanan
                        dan gaya. Pergi ke lokasi tujuanmu dengan aman dan nyaman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Ngojol -->
    <section class="py-48 bg-white border-t border-gray-200" id="review">
        <div class="max-w-8xl mx-auto px-12">
            <h2 class="text-5xl font-bold text-center text-gray-800 mb-8" style="margin-top: -100px;">Review Pelanggan
            </h2>
            <p class="text-xl text-center text-gray-600 mb-20"
                style="font-family: 'Arial', sans-serif; margin-top: -10px;">Apa kata mereka tentang
                layanan kami?</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <!-- Review 1 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cowo1.jpg" alt="Budi Santoso" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-2">Budi Santoso</h3>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm" style="font-family: 'Arial', sans-serif;">Layanan yang sangat cepat
                        dan aman. Saya sangat puas dengan
                        pengantaran yang dilakukan oleh Ngojol Express.</p>
                </div>

                <!-- Review 2 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cewe1.jpg" alt="Siti Aminah" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-2">Siti Aminah</h3>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm" style="font-family: 'Arial', sans-serif;">Pengalaman yang luar
                        biasa dengan Ngojol Truk. Barang besar saya
                        sampai dengan aman dan tepat waktu.</p>
                </div>

                <!-- Review 3 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cowo2.jpg" alt="Andi Wijaya" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-2">Andi Wijaya</h3>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm" style="font-family: 'Arial', sans-serif;">Ngojol Motor adalah
                        solusi terbaik untuk menghindari kemacetan.
                        Sangat cepat dan efisien!</p>
                </div>

                <!-- Review 4 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cewe2.jpg" alt="Dewi Lestari" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-2">Dewi Lestari</h3>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm">Menggunakan Ngojol Mobil sangat nyaman dan aman. Saya sangat
                        merekomendasikannya!</p>
                </div>

                <!-- Review 5 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cowo3.jpg" alt="Agus Pratama" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-2">Agus Pratama</h3>
                    <div class="flex mb-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm">Pelayanan yang sangat memuaskan, Ngojol Express selalu tepat waktu
                        dan aman.</p>
                </div>

                <!-- Review 6 -->
                <div class="flex flex-col items-center text-center mx-2 mb-5">
                    <img src="img/costumer/cewe3.jpg" alt="Rina Sari" class="w-16 h-16 rounded-full mb-3">
                    <h3 class="text-xl font-semibold mb-1">Rina Sari</h3>
                    <div class="flex mb-1">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-gray-500 text-sm">Ngojol Truk sangat membantu dalam pengiriman barang besar saya.
                        Sangat direkomendasikan!</p>
                </div>
            </div>
        </div>
    </section>

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
                    <p class="text-lg text-white mb-6">Dapatkan pengalaman terbaik dengan aplikasi kami yang mudah
                        digunakan dan cepat.</p>
                    <div class="flex justify-start space-x-4" id="download-section">
                        <a href="https://play.google.com/store" target="_blank">
                            <img src="img/playstore-logo.png" alt="playstore" class="h-20">
                        </a>
                        <a href="https://www.apple.com/app-store/" target="_blank" id="download-section">
                            <img src="img/appstore-logo.png" alt="appstore" class="h-20">
                        </a>
                    </div>
                </div>
                <script>
                    const downloadSection = document.getElementById('download-section');
                    window.addEventListener('scroll', function () {
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
    <!-- Portofolio Partner -->
    <section class="py-20 bg-white border-t border-gray-200" id="partner">
        <div class="container mx-auto px-4" style="margin-bottom: 100px;">
            <h2 class="text-5xl font-bold text-center text-gray-800 mb-8">Portofolio Partner</h2>
            <p class="text-xl text-center text-gray-600 mb-20">Kami bekerja sama dengan berbagai perusahaan untuk
                memberikan layanan terbaik.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 justify-center items-center">
                <!-- Partner 1 -->
                <div class="bg-gray-100 p-1 rounded-lg shadow-md">
                    <a href="https://www.tokopedia.com" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/tokopedia2167.jpg/" alt="tokopedia"
                            class="w-full max-w-xs mx-auto transform hover:scale-105 transition duration-500 rounded-lg shadow-md">
                    </a>
                </div>
                <!-- Partner 2 -->
                <div class="bg-gray-100 p-1 rounded-lg shadow-md">
                    <a href="https://www.shopee.co.id" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/shopee1950.jpg/" alt="Shopee"
                            class="w-full max-w-xs mx-auto transform hover:scale-105 transition duration-500 rounded-lg shadow-md">
                    </a>
                </div>
                <!-- Partner 3 -->
                <div class="bg-gray-100 p-1 rounded-lg shadow-md">
                    <a href="https://www.bukalapak.com" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/bukalapak1445.jpg" alt="Bukalapak"
                            class="w-full max-w-xs mx-auto transform hover:scale-105 transition duration-500 rounded-lg shadow-md">
                    </a>
                </div>
                <!-- Partner 4 -->
                <div class="bg-gray-100 p-1 rounded-lg shadow-md">
                    <a href="https://www.lazada.co.id" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/lazada3460.jpg" alt="Lazada"
                            class="w-full max-w-xs mx-auto transform hover:scale-105 transition duration-500 rounded-lg shadow-md">
                    </a>
                </div>
                <!-- Partner 5 -->
                <div class="bg-gray-100 p-1 rounded-lg shadow-md">
                    <a href="https://www.tiktok.com" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/tiktok-shop7845.logowik.com.webp"
                            alt="Tiktok Shop"
                            class="w-full max-w-xs mx-auto transform hover:scale-105 transition duration-500 rounded-lg shadow-md">
                    </a>
                </div>
                <!-- Partner 6 -->
                <div class="bg-gray-100 p-2 rounded-xl shadow-lg">
                    <a href="https://www.blibli.com" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/bliblicom1753.jpg" alt="BliBli"
                            class="w-full max-w-sm mx-auto transform hover:scale-105 transition duration-500 rounded-xl shadow-lg">
                    </a>
                </div>
                <!-- Partner 7 -->
                <div class="bg-gray-100 p-2 rounded-xl shadow-lg">
                    <a href="https://www.zalora.co.id" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/zalora-group6252.logowik.com.webp"
                            alt="BliBli"
                            class="w-full max-w-sm mx-auto transform hover:scale-105 transition duration-500 rounded-xl shadow-lg">
                    </a>
                </div>
                <!-- Partner 8 -->
                <div class="bg-gray-100 p-2 rounded-xl shadow-lg">
                    <a href="https://www.alibaba.com" target="_blank">
                        <img src="https://logowik.com/content/uploads/images/453_alibaba.jpg" alt="BliBli"
                            class="w-full max-w-sm mx-auto transform hover:scale-105 transition duration-500 rounded-xl shadow-lg">
                    </a>

                </div>
            </div>
    </section>

    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            watchOverflow: true,
            simulateTouch: true,
        });

    </script>

    <!-- Berita -->
    <section class="py-20 bg-white border-t border-gray-200" id="berita">
        <div class="container mx-auto px-4" style="margin-bottom: 100px;">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800">Berita Terbaru</h1>
                <p class="text-xl text-gray-600">Dapatkan informasi terbaru dan berita terkini dari kami.</p>
            </div>
            <div class="relative">
                <div class="flex overflow-x-auto space-x-8 berita-container">
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/amannyaman.png" alt="Berita 1" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Aman dan Nyaman di Era New Normal</h3>
                            <p class="text-gray-600">Di era new normal, keamanan dan kenyamanan menjadi prioritas utama.
                                Kami hadir untuk memastikan Anda tetap merasa aman dan nyaman dalam setiap perjalanan.
                            </p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/drivers.jpg" alt="Berita 2" class="w-full" style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Cara Daftar Driver</h3>
                            <p class="text-gray-600">Ingin bergabung menjadi bagian dari tim kami? Pelajari
                                langkah-langkah
                                mudah untuk mendaftar sebagai driver dan mulai perjalanan baru Anda bersama kami.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/berlangganan.png" alt="Berita 3" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Paket Berlangganan Driver</h3>
                            <p class="text-gray-600">Nikmati berbagai keuntungan dengan paket berlangganan driver kami.
                                Dapatkan akses eksklusif dan layanan terbaik yang dirancang khusus untuk Anda.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/technology-updates.png" alt="Berita 4" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Pembaruan Teknologi Ngojol</h3>
                            <p class="text-gray-600">Ngojol kini hadir dengan pembaruan teknologi canggih yang
                                memudahkan
                                pengguna dalam memesan layanan dengan lebih cepat dan efisien.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/comunity.png" alt="Berita 5" class="w-full" style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Dukungan Komunitas Ngojol</h3>
                            <p class="text-gray-600">Ngojol berperan aktif dalam mendukung komunitas lokal dengan
                                berbagai
                                kegiatan sosial yang bermanfaat dan berkelanjutan.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/new-feature.jpg" alt="Berita 4" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Fitur Baru di Aplikasi Ngojol</h3>
                            <p class="text-gray-600">Nikmati fitur baru di aplikasi Ngojol yang dirancang untuk
                                meningkatkan kenyamanan dan keamanan dalam setiap perjalanan Anda.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/collaboration.jpg" alt="Berita 5" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Kolaborasi Sosial Ngojol</h3>
                            <p class="text-gray-600">Bersama Ngojol, mari kita bangun kolaborasi sosial yang berdampak
                                positif bagi masyarakat sekitar.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/technology-advances.jpg" alt="Berita 4" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Kemajuan Teknologi di Ngojol</h3>
                            <p class="text-gray-600">Dengan kemajuan teknologi, Ngojol terus berupaya memberikan layanan
                                terbaik dan inovatif bagi seluruh pengguna.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <div class="flex-none bg-white shadow-lg rounded-lg overflow-hidden" style="width: 400px;">
                        <img src="img/folder-berita/social-role.jpg" alt="Berita 5" class="w-full"
                            style="height: 300px;">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Peran Sosial Ngojol</h3>
                            <p class="text-gray-600">Ngojol berkomitmen untuk terus berperan aktif dalam kegiatan sosial
                                yang memberikan manfaat nyata bagi masyarakat.</p>
                            <a href="#" class="text-cyan-500 hover:text-cyan-600 mt-4 block">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <button
                        class="bg-transparent text-white p-2 rounded-full hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:ring-opacity-50 prev-button">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <button
                        class="bg-transparent text-white p-2 rounded-full hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:ring-opacity-50 next-button">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const beritaContainer = document.querySelector('.berita-container');
            const prevButton = document.querySelector('.prev-button');
            const nextButton = document.querySelector('.next-button');
            let isDown = false;
            let startX;
            let scrollLeft;
            let autoScrollInterval;
            let isScrolling = false;
            let scrollDirection = 1; // 1 for right, -1 for left

            function startAutoScroll() {
                autoScrollInterval = setInterval(function () {
                    if (beritaContainer.scrollLeft + beritaContainer.clientWidth >= beritaContainer
                        .scrollWidth) {
                        scrollDirection = -1;
                    } else if (beritaContainer.scrollLeft <= 0) {
                        scrollDirection = 1;
                    }

                    beritaContainer.scrollBy({
                        left: 400 * scrollDirection,
                        behavior: 'smooth'
                    });
                }, 5000);
            }

            function stopAutoScroll() {
                clearInterval(autoScrollInterval);
            }

            function resetAutoScroll() {
                stopAutoScroll();
                startAutoScroll();
            }

            prevButton.addEventListener('click', function () {
                stopAutoScroll();
                beritaContainer.scrollBy({
                    left: -400,
                    behavior: 'smooth'
                });
                resetAutoScroll();
            });

            nextButton.addEventListener('click', function () {
                stopAutoScroll();
                beritaContainer.scrollBy({
                    left: 400,
                    behavior: 'smooth'
                });
                resetAutoScroll();
            });

            document.addEventListener('keydown', function (event) {
                stopAutoScroll();
                if (event.key === 'ArrowLeft') {
                    beritaContainer.scrollBy({
                        left: -400,
                        behavior: 'smooth'
                    });
                } else if (event.key === 'ArrowRight') {
                    beritaContainer.scrollBy({
                        left: 400,
                        behavior: 'smooth'
                    });
                }
                resetAutoScroll();
            });

            beritaContainer.addEventListener('mousedown', (e) => {
                stopAutoScroll();
                isDown = true;
                beritaContainer.classList.add('active');
                startX = e.pageX - beritaContainer.offsetLeft;
                scrollLeft = beritaContainer.scrollLeft;
            });

            beritaContainer.addEventListener('mouseleave', () => {
                isDown = false;
                beritaContainer.classList.remove('active');
                if (!isScrolling) resetAutoScroll();
            });

            beritaContainer.addEventListener('mouseup', () => {
                isDown = false;
                beritaContainer.classList.remove('active');
                if (!isScrolling) resetAutoScroll();
            });

            beritaContainer.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - beritaContainer.offsetLeft;
                const walk = (x - startX) * 3; //scroll-fast
                beritaContainer.scrollTo({
                    left: scrollLeft - walk,
                    behavior: 'smooth'
                });
            });

            // Start auto scroll
            startAutoScroll();
        });

    </script>

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const beritaContainer = document.querySelector('.berita-container');
            const prevButton = document.querySelector('.prev-button');
            const nextButton = document.querySelector('.next-button');

            prevButton.addEventListener('click', function () {
                beritaContainer.scrollBy({
                    left: -400,
                    behavior: 'smooth'
                });
            });

            nextButton.addEventListener('click', function () {
                beritaContainer.scrollBy({
                    left: 400,
                    behavior: 'smooth'
                });
            });
        });

    </script>
    </div>
    </div>
    </section>


    <!-- FAQ Pengguna -->
    <section class="py-20 bg-white border-t border-gray-200" id="faq">
        <div class="container mx-auto px-4" style="margin-bottom: 100px;">
            <div class="bg-cyan-500 text-white px-4 py-10 rounded-lg mb-5">
                <h1 class="text-4xl font-bold text-center mb-5">FAQ Pengguna</h1>
                <p class="text-xl text-center">Pertanyaan yang sering diajukan oleh pengguna kami.</p>
            </div>
            <div class="max-w-3xl mx-auto ">
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold text-gray-800">Apa itu Ngojol?</h3>
                    <p class="text-gray-600 mt-2">Ngojol adalah platform transportasi online yang menghubungkan
                        pengguna dengan pengemudi untuk layanan antar jemput.</p>
                </div>
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold text-gray-800">Bagaimana cara memesan layanan di Ngojol?</h3>
                    <p class="text-gray-600 mt-2">Anda dapat memesan layanan melalui aplikasi Ngojol yang tersedia di
                        Google Play Store dan App Store.</p>
                </div>
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold text-gray-800">Apakah Ngojol tersedia di seluruh Indonesia?</h3>
                    <p class="text-gray-600 mt-2">Saat ini, Ngojol tersedia di beberapa kota besar di Indonesia dan
                        terus memperluas jangkauannya.</p>
                </div>
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold text-gray-800">Bagaimana cara menghubungi layanan pelanggan
                        Ngojol?</h3>
                    <p class="text-gray-600 mt-2">Anda dapat menghubungi layanan pelanggan kami melalui email di
                        support@ngojol.id atau melalui fitur bantuan di aplikasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hubungi Kami -->
    <section class="py-20 bg-white border-t border-gray-200" id="hubungi">
        <div class="container mx-auto px-4" style="margin-bottom: 100px;">
            <div class="bg-cyan-500 text-white px-4 py-10 rounded-lg mb-5">
                <h1 class="text-4xl font-bold text-center mb-5">Hubungi Kami</h1>
                <p class="text-xl text-center">Kami siap membantu Anda. Silakan hubungi kami melalui informasi di bawah
                    ini.</p>
            </div>
            <div class="flex flex-col md:flex-row max-w-2xl mx-auto space-y-3 md:space-y-0 md:space-x-6">
                <div class="w-full md:w-1/2 flex justify-start items-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.98770278983!2d106.55732635541992!3d-6.164636799999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ffa21b9d9967%3A0x66e118f78bef19f7!2sSDIT%20Bunayya!5e0!3m2!1sid!2sid!4v1733037439937!5m2!1sid!2sid"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Alamat Kantor</h3>
                        <p class="text-gray-500 mt-1">Permata Tangerang Blok DC 1 No 20</p>
                        <p class="text-gray-500 mt-1">Kel Gelam Jaya, Pasar Kemis</p>
                        <p class="text-gray-500 mt-1">Kabupaten Tangerang</p>
                        <p class="text-gray-500 mt-1">15560</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                        <p class="text-gray-500 mt-1">support@ngojol.id</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Telepon</h3>
                        <p class="text-gray-500 mt-1">(021) 1234-5678</p>
                        <p class="text-gray-500 mt-1">+62 85770767402</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Jam Operasional</h3>
                        <p class="text-gray-500 mt-1">Senin - Jumat: 09.00 - 18.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 border-t border-gray-200" id="footer">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h1 style="font-family: 'Poppins', sans-serif; font-size: 2rem; color: white;">NG-OJOL</h1>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
                        rel="stylesheet">
                    <p class="text-gray-400">Layanan antar jemput terpercaya yang siap melayani
                        kebutuhan pengiriman
                        Anda 24/7</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6">Layanan</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Pengiriman
                                Cepat</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Pengiriman
                                Barang</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Pesan
                                Makanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6">Kontak</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-orange-500"></i>
                            <span class="text-gray-400">info@ngojol.id</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-orange-500"></i>
                            <span class="text-gray-400">(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fab fa-whatsapp text-orange-500"></i>
                            <span class="text-gray-400">+6285770767402</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-6">Download App</h4>
                    <div class="flex flex-col space-y-4">
                        <a href="https://play.google.com/store"
                            class="transform hover:scale-105 transition duration-300">
                            <img src="img/playstore.png" alt="Google Play" class="h-12">
                        </a>
                        <a href="https://www.apple.com/app-store/"
                            class="transform hover:scale-105 transition duration-300">
                            <img src="img/app-store.png" alt="App Store" class="h-12">

                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400">&copy; 2024 Ngojol. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="https://www.facebook.com/kurniawan.dwi.prasetyo.2024"
                            class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="https://x.com/stopbeingidiott"
                            class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com/kurniawandwipras/"
                            class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
