<nav class="fixed w-full z-50 transition-all duration-300 font-poppins bold" id="navbar">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center ml-4">
                <a href="#beranda" class="flex-shrink-0 flex items-center">
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
                <a href="#fitur"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Fitur</a>
                <a href="#layanan"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Layanan</a>
                <a href="#review"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Review</a>
                <a href="#download"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Download</a>
                <a href="{{ route('news.index') }}"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">Berita</a>
                <a href="#faq"
                    class="px-3 py-2 text-white hover:text-white hover:border-b-2 hover:border-white transition duration-300 navbar-link">FAQ</a>
                <a href="#hubungi"
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

<script>
    // Mendapatkan elemen judul navbar
    const navbarTitle = document.getElementById('navbar-title');

    // Memeriksa URL saat ini
    if (window.location.pathname === '/') {
        // Jika berada di halaman beranda, set warna teks menjadi putih
        navbarTitle.classList.remove('text-black');
        navbarTitle.classList.add('text-white');
    } else {
        // Jika berada di halaman lain, set warna teks menjadi hitam
        navbarTitle.classList.remove('text-white');
        navbarTitle.classList.add('text-black');
    }
</script>

<style>
    /* Hover untuk tautan navbar */
    .navbar-link:hover {
        color: white;
        /* Ubah warna teks menjadi putih */
        border-bottom: 2px solid white;
        /* Tambahkan garis putih di bawah */
    }

    /* Hover untuk tombol daftar driver */
    #daftar-driver-button:hover {
        color: white;
        /* Mengubah warna teks tombol menjadi putih */
        background-color: #00ACC1
            /* Mengubah background menjadi cyan-500 saat hover */
    }

    /* Navbar default untuk halaman selain beranda */
    .navbar-white .navbar-link {
        color: black;
    }

    /* Navbar untuk halaman beranda */
    .navbar-cyan .navbar-link {
        color: white;
    }
</style>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar'); // Ambil elemen navbar
        const navbarLinks = document.querySelectorAll(
            '.navbar-link'); // Ambil semua tautan dengan class navbar-link
        const beranda = document.getElementById('beranda');
        const berandaHeight = beranda.offsetHeight;

        if (window.scrollY < berandaHeight) {
            // Saat di beranda
            navbar.style.backgroundColor = 'transparent'; // Navbar transparan
            navbar.classList.remove('shadow-md'); // Hilangkan bayangan
            navbarLinks.forEach(link => {
                link.style.color = 'white'; // Teks tautan putih
                link.classList.remove('hover:text-blue-600'); // Hilangkan hover biru
                link.classList.add('hover:text-white'); // Hover menjadi putih
            });
        } else {
            // Saat keluar dari beranda
            navbar.style.backgroundColor = '#06b6d4'; // Background cyan-500
            navbarLinks.forEach(link => {
                link.style.color = 'black'; // Teks tautan hitam
                link.classList.remove('hover:text-white'); // Hilangkan hover putih
                link.classList.add('hover:#EEEEEE'); // Hover menjadi biru
            });
        }
    });
</script>

<script>
    const navbar = document.getElementById('navbar');
    const navbarTitle = document.getElementById('navbar-title');
    const navbarLinks = document.querySelectorAll('.navbar-link');
    const beranda = document.getElementById('beranda');

    let isTransparent = true; // Menyimpan status transparansi navbar

    // Fungsi untuk memeriksa lokasi hash saat ini
    function checkCurrentHash() {
        if (window.location.hash !== '#beranda' && window.location.hash !== '') {
            setNavbarSolid(); // Jika hash bukan #beranda atau kosong
        } else {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const berandaHeight = beranda.offsetHeight;

            if (scrollTop < berandaHeight) {
                setNavbarTransparent(); // Jika berada di bagian atas beranda
            } else {
                setNavbarSolid(); // Jika sudah melewati beranda
            }
        }
    }

    // Fungsi yang dijalankan saat halaman di-scroll
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const berandaHeight = beranda.offsetHeight;

        if (scrollTop < berandaHeight && window.location.hash === '#beranda') {
            setNavbarTransparent(); // Jika di atas tinggi elemen beranda
        } else {
            setNavbarSolid(); // Jika di bawah tinggi elemen beranda
        }
    });

    // Fungsi untuk membuat navbar transparan
    function setNavbarTransparent() {
        if (!isTransparent) {
            navbar.classList.remove('bg-white', 'shadow-md');
            navbar.classList.add('bg-transparent');
            navbarTitle.classList.remove('text-black');
            navbarTitle.classList.add('text-white');
            navbarLinks.forEach(link => {
                link.classList.remove('text-black');
                link.classList.add('text-white');
            });
            isTransparent = true; // Set status transparansi menjadi true
        }
    }

    // Fungsi untuk membuat navbar solid (putih dengan teks hitam)
    function setNavbarSolid() {
        if (isTransparent) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow-md');
            navbarTitle.classList.remove('text-white');
            navbarTitle.classList.add('text-black');
            navbarLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-black');
            });
            isTransparent = false; // Set status transparansi menjadi false
        }
    }

    // Periksa hash saat halaman dimuat
    window.addEventListener('load', checkCurrentHash);
    window.addEventListener('hashchange', checkCurrentHash); // Periksa saat hash berubah
</script>
