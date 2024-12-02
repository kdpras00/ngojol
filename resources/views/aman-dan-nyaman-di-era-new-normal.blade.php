<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngojol | {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>



<body class="font-poppins">
    <!-- Navbar -->
    <nav class="bg-cyan-500 fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                        <div class="flex items-center">
                            <img src="img/delivery.png" alt="fast-delivery" class="h-12">
                            <h1
                                style="font-family: 'Poppins', sans-serif; font-size: 2rem; color: white; margin-left: 10px;">
                                NG-OJOL
                            </h1>
                        </div>
                    </a>
                    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
                        rel="stylesheet">
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ url('/#fitur') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Fitur</a>
                    <a href="{{ url('/#layanan') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Layanan</a>
                    <a href="{{ url('/#review') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Review</a>
                    <a href="{{ url('/#download') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Download</a>
                    <a href="{{ url('/#berita') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Berita</a>
                    <a href="{{ url('/#faq') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">FAQ</a>
                    <a href="{{ url('/#hubungi') }}"
                        class="px-3 py-2 text-white hover:text-orange-500 transition duration-500 ease-in-out">Hubungi
                        Kami</a>
                    <a href="{{ url('/pendaftaran-driver-baru') }}">
                        <button
                            class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition duration-500 ease-in-out">
                            Daftar Driver
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
