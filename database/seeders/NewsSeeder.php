<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan berita pertama hingga ketiga
        News::create([
            'title' => 'Aman dan Nyaman di Era New Normal',
            'content' => 'Dengan penerapan protokol kesehatan yang ketat, kami memastikan Anda tetap aman dan nyaman saat menggunakan layanan kami di era new normal ini. Kami menyediakan berbagai langkah pencegahan seperti desinfeksi rutin pada armada kami dan memastikan pengemudi kami mengikuti protokol kesehatan yang berlaku. Kami juga menyediakan opsi tanpa kontak langsung untuk kenyamanan Anda.',
            'image' => 'amannyaman.png',
        ]);

        News::create([
            'title' => 'Cara Daftar Driver di Platform Kami',
            'content' => 'Ingin bergabung sebagai driver? Pelajari langkah-langkah mudah untuk mendaftar dan menjadi bagian dari tim kami yang profesional. Proses pendaftaran kami sangat mudah dan cepat, Anda hanya perlu mengisi formulir pendaftaran, mengunggah dokumen yang diperlukan, dan menjalani pelatihan singkat untuk memahami sistem kami.',
            'image' => 'drivers.jpg',
        ]);

        News::create([
            'title' => 'Paket Berlangganan Layanan Kami',
            'content' => 'Nikmati layanan kami lebih banyak dengan berbagai pilihan paket berlangganan yang memberikan keuntungan lebih, termasuk tarif spesial dan akses prioritas. Dengan paket berlangganan, Anda dapat menikmati diskon khusus dan kemudahan dalam pemesanan, sehingga Anda bisa menikmati perjalanan dengan harga yang lebih terjangkau.',
            'image' => 'berlangganan.png',
        ]);

        // Menambahkan berita keempat hingga keenam
        News::create([
            'title' => 'Peran Komunitas dalam Layanan Kami',
            'content' => 'Kami percaya bahwa komunitas adalah bagian penting dalam kesuksesan kami. Mari bergabung dan tumbuh bersama dengan menjadi bagian dari komunitas kami. Dengan komunitas yang solid, kami dapat lebih cepat menanggapi kebutuhan pelanggan dan memberikan layanan yang lebih baik di masa depan.',
            'image' => 'comunity.png',
        ]);

        News::create([
            'title' => 'Peran Sosial Layanan Kami dalam Masyarakat',
            'content' => 'Layanan kami tidak hanya berfokus pada transportasi, tetapi juga berperan dalam kegiatan sosial yang mendukung perkembangan masyarakat sekitar. Kami secara aktif berpartisipasi dalam berbagai kegiatan sosial, seperti program bantuan untuk masyarakat yang membutuhkan, dan mendukung usaha kecil di komunitas lokal.',
            'image' => 'social-role.jpg',
        ]);

        News::create([
            'title' => 'Kemajuan Teknologi dalam Layanan Kami',
            'content' => 'Dengan teknologi terbaru, kami terus berinovasi untuk memberikan pengalaman terbaik kepada pelanggan kami, memudahkan Anda dalam setiap perjalanan. Sistem pemesanan kami yang berbasis aplikasi memberikan kemudahan bagi Anda untuk melakukan pemesanan, melacak perjalanan, dan membayar dengan cara yang lebih cepat dan aman.',
            'image' => 'technology-advances.jpg',
        ]);

        // Menambahkan berita ketujuh hingga kesembilan
        News::create([
            'title' => 'Kolaborasi dengan Partner Terpercaya',
            'content' => 'Kami bekerja sama dengan berbagai mitra terpercaya untuk memastikan kualitas layanan yang kami tawarkan tetap terjaga dengan baik. Kolaborasi ini juga membantu kami memperluas jaringan dan menawarkan lebih banyak pilihan layanan yang bermanfaat bagi pelanggan kami.',
            'image' => 'collaboration.jpg',
        ]);

        News::create([
            'title' => 'Pembaruan Teknologi Layanan Kami',
            'content' => 'Layanan kami terus diperbarui dengan teknologi terbaru untuk memberikan pengalaman yang lebih baik dan lebih efisien bagi Anda. Kami secara rutin memperbarui aplikasi kami dengan fitur-fitur baru yang memudahkan pengguna, termasuk integrasi dengan pembayaran digital dan notifikasi real-time untuk kenyamanan Anda.',
            'image' => 'technology-updates.png',
        ]);
    }
}
