@extends('layouts.main')

@section('title', $title ?? 'Pendaftaran Driver Baru')

@section('navbar')
    @include('partials.navbar')
    <!-- Pendaftaran Driver Baru Section -->
    <section class="py-20 bg-gray-100" id="pendaftaran-driver-baru">
        <div class="container mx-auto px-6 py-8 bg-white border border-gray-300 shadow-lg rounded-lg max-w-4xl mx-auto">
            <!-- Added py-24 for spacing -->
            <h1 class="text-4xl font-bold text-center mb-8 bg-cyan-500 text-white px-4 py-10  rounded-lg">
                Pendaftaran
                Driver
                Baru</h1>


            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg"
                action="{{ url('submit-pendaftaran-driver') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required></textarea>
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
@endsection
