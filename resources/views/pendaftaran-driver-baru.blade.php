@if(session('success'))
<div class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4">
    {{ session('success') }}
</div>
@endif

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
                                button.style.color = 'white';
                            }
                        });

                    </script>
            </div>
        </div>
    </div>
</nav>
<!-- Pendaftaran Driver Baru Section -->
<section class="py-20 bg-gray-100" id="pendaftaran-driver-baru">
    <div class="container mx-auto px-2 py-1 mb-16">
        <!-- Added py-24 for spacing -->
        <h1 class="text-4xl font-bold text-center mb-8 bg-cyan-500 text-white px-4 py-10  rounded-lg">
            Pendaftaran
            Driver
            Baru</h1>
        <form class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg"
            action="{{ url('/submit-pendaftaran-driver') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-bold mb-2">Alamat</label>
                <textarea id="address" name="address"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required></textarea>
            </div>
            <div class="mb-4">
                <label for="vehicle" class="block text-gray-700 font-bold mb-2">Jenis Kendaraan</label>
                <select id="vehicle" name="vehicle"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
                    <option value="motor">Motor</option>
                    <option value="mobil">Mobil</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="license" class="block text-gray-700 font-bold mb-2">Nomor SIM</label>
                <input type="text" id="license" name="license"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="ktp" class="block text-gray-700 font-bold mb-2">Nomor KTP</label>
                <input type="text" id="ktp" name="ktp"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-bold mb-2">Foto</label>
                <input type="file" id="photo" name="photo"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="agreement" class="block text-gray-700 font-bold mb-2">
                    <input type="checkbox" id="agreement" name="agreement" class="mr-2" required>
                    Saya setuju dengan syarat dan ketentuan yang berlaku
                </label>
            </div>
            <div class="text-left">
                <button type="submit"
                    class="bg-cyan-500 text-white px-4 py-2 rounded-lg hover:bg-cyan-600 transition duration-300 text-lg">Daftar
                    Sekarang</button>
            </div>
        </form>
    </div>
</section>
</body>

</html>
