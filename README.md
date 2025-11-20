<h1 align="center">Yoredaze App: Nonton Anime Kapan Saja, Di Mana Saja</h1>

<p align="center"> Proyek ini adalah aplikasi web (WebApp) dinamis yang memungkinkan pengguna untuk menonton anime favorit mereka. Dibangun menggunakan framework PHP terkemuka, Laravel. </p>

<h1 align="center">Powered by Laravel, Anilist API, dan Penyedia Streaming Terkemuka</h1>

Dukungan Aplikasi (Web)
Akses Universal: Dapat diakses melalui browser web modern apa pun (Desktop, Tablet, Mobile).

Responsif: Tata letak disajikan secara mulus untuk berbagai ukuran layar menggunakan standar modern.

Kompatibilitas: Membutuhkan browser yang mendukung standar web modern (HTML5, CSS3, JavaScript ES6+).

Pratinjau Aplikasi
(Sama seperti draf sebelumnya, Anda dapat mengisi bagian ini dengan gambar-gambar Yoredaze App, misal:)

🖥️ Dashboard
🔎 Pencarian
📝 Detail & Player
Fitur Utama & Manajemen Konten
⚙️ Manajemen Pengguna & Otentikasi
Pendaftaran Mandiri: Pengguna dapat mendaftar akun secara langsung.

Login Cepat: Mendukung fitur "Login with Google" untuk akses yang lebih cepat.

Riwayat Tontonan: Data progres tontonan (History) disimpan untuk setiap pengguna.

📝 Pengelolaan Konten Anime (Admin Panel)
Admin Panel Khusus: Dilengkapi dengan Custom Admin Panel berbasis Laravel untuk mempublikasikan dan mengelola konten.

Postingan Anime: Administrator dapat menambahkan entri anime baru dan memperbarui detail episode melalui antarmuka ini.

Basis Data Utama: Menggunakan MySQL (dikelola via phpMyAdmin) sebagai basis data utama untuk menyimpan data anime yang diposting, data pengguna, dan riwayat tontonan.

Tumpukan Teknologi & Arsitektur
Yoredaze Web App dibangun dengan pendekatan berbasis Full-Stack menggunakan ekosistem PHP dan JavaScript.

💻 Backend (The Core)
Framework: Laravel (PHP) - Digunakan untuk seluruh logika business, routing, middleware, dan lapisan data.

Basis Data: MySQL (dikelola melalui phpMyAdmin) - Menyimpan semua data konten (anime, episode, status), data pengguna, dan sesi.

Manajemen Konten: Admin Panel Laravel.

API Integrasi:

Mengambil data metadata anime (judul, sinopsis, gambar, rating) dari Anilist API.

Logika untuk mengarahkan atau mengambil stream dari penyedia streaming pihak ketiga.

🌐 Frontend (The Interface)
Bahasa: HTML, CSS, JavaScript (vanilla atau dengan library ringan seperti Vue/Alpine/Livewire) - Untuk tampilan dan interaktivitas.

Rendering: Menggunakan Blade Templating Engine milik Laravel untuk server-side rendering (SSR) yang cepat dan SEO-friendly, dikombinasikan dengan AJAX/Fetch API untuk pembaruan data asinkron.

Styling: Menggunakan library CSS seperti Tailwind CSS atau Bootstrap untuk desain yang responsif.

🏛️ Arsitektur
MVC (Model-View-Controller): Mengikuti pola arsitektur Laravel untuk pemisahan kekhawatiran yang jelas dan kode yang mudah dipelihara.

Repository Pattern: Kemungkinan digunakan untuk memisahkan logika pengambilan data dari model dan controller, memudahkan switch antara data lokal MySQL dan Anilist API.
