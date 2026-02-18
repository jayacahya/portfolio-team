{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>
    
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Font Awesome untuk ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="font-sans antialiased">

    {{-- Navbar --}}
    <nav class="bg-white shadow-lg fixed w-full z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-gray-800">
                    <a href="#home">PortfolioKu</a>
                </div>
                
                {{-- Menu Desktop --}}
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-blue-600 transition">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600 transition">Tentang</a>
                    <a href="#projects" class="text-gray-600 hover:text-blue-600 transition">Proyek</a>
                    <a href="#services" class="text-gray-600 hover:text-blue-600 transition">Layanan</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Kontak</a>
                </div>

                {{-- Mobile Menu Button --}}
                <button class="md:hidden text-gray-600" onclick="toggleMenu()">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>

            {{-- Menu Mobile --}}
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600 transition">Home</a>
                <a href="#about" class="block py-2 text-gray-600 hover:text-blue-600 transition">Tentang</a>
                <a href="#projects" class="block py-2 text-gray-600 hover:text-blue-600 transition">Proyek</a>
                <a href="#services" class="block py-2 text-gray-600 hover:text-blue-600 transition">Layanan</a>
                <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600 transition">Kontak</a>
            </div>
        </div>
    </nav>

    {{-- HERO SECTION --}}
    <section id="home" class="pt-20 bg-gradient-to-r from-blue-500 to-purple-600 text-white">
        <div class="max-w-6xl mx-auto px-4 py-20">
            <div class="text-center">
                {{-- Foto Profil --}}
                <div class="mb-8">
                    <div class="w-40 h-40 mx-auto bg-white rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://via.placeholder.com/200" alt="Profile" class="w-full h-full object-cover">
                    </div>
                </div>
                
                {{-- Nama --}}
                <h1 class="text-5xl font-bold mb-4">John Doe</h1>
                
                {{-- Profesi --}}
                <p class="text-2xl mb-6">Web Developer & Designer</p>
                
                {{-- Deskripsi --}}
                <p class="text-lg max-w-2xl mx-auto mb-10">
                    Saya seorang pengembang web yang passionate dalam menciptakan 
                    solusi digital yang kreatif dan inovatif.
                </p>
                
                {{-- Tombol CTA --}}
                <div class="flex justify-center space-x-4">
                    <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                        Hubungi Saya
                    </a>
                    <a href="#projects" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition">
                        Lihat Proyek
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Tentang Saya</h2>
            
            <div class="flex flex-col md:flex-row items-center gap-12">
                {{-- Foto --}}
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/500x400" alt="About" class="rounded-lg shadow-xl w-full">
                </div>
                
                {{-- Deskripsi --}}
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold mb-4">Halo, Saya John Doe</h3>
                    <p class="text-gray-600 mb-4">
                        Saya adalah seorang pengembang web dengan pengalaman lebih dari 5 tahun 
                        dalam membangun website dan aplikasi web yang responsif dan user-friendly.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Saya percaya bahwa teknologi dapat menjadi solusi untuk berbagai masalah, 
                        dan saya berkomitmen untuk menciptakan produk digital yang tidak hanya 
                        fungsional tetapi juga estetis.
                    </p>
                    
                    {{-- Skills --}}
                    <h4 class="text-xl font-semibold mb-3">Keahlian:</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>HTML5 & CSS3</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>PHP & Laravel</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>React.js</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                            <span>UI/UX Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS SECTION --}}
    <section id="projects" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4">Proyek Terbaru</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">
                Beberapa proyek yang telah saya kerjakan. Setiap proyek adalah hasil dari 
                dedikasi dan kreativitas terbaik.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Project 1 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/400x250" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Aplikasi E-commerce</h3>
                        <p class="text-gray-600 mb-4">
                            Aplikasi e-commerce lengkap dengan fitur keranjang belanja dan pembayaran online.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Vue.js</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">MySQL</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center">
                            Lihat Detail 
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Project 2 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/400x250" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Website Portfolio</h3>
                        <p class="text-gray-600 mb-4">
                            Website portfolio profesional dengan desain modern dan responsif.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">React</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Tailwind</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Framer</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center">
                            Lihat Detail 
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                {{-- Project 3 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="https://via.placeholder.com/400x250" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Sistem Manajemen Inventaris</h3>
                        <p class="text-gray-600 mb-4">
                            Sistem untuk mengelola stok barang dengan fitur laporan dan notifikasi.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">PHP</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Laravel</span>
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">Bootstrap</span>
                        </div>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold inline-flex items-center">
                            Lihat Detail 
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition inline-flex items-center">
                    Lihat Semua Proyek
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Layanan Saya</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Service 1 --}}
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-code text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                    <p class="text-gray-600">
                        Membangun website yang responsif, cepat, dan user-friendly menggunakan teknologi terkini.
                    </p>
                </div>
                
                {{-- Service 2 --}}
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-paint-brush text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">UI/UX Design</h3>
                    <p class="text-gray-600">
                        Mendesain antarmuka yang menarik dan pengalaman pengguna yang intuitif.
                    </p>
                </div>
                
                {{-- Service 3 --}}
                <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fa-solid fa-mobile-screen text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Development</h3>
                    <p class="text-gray-600">
                        Mengembangkan aplikasi mobile cross-platform dengan performa tinggi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section id="contact" class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Tertarik Bekerja Sama?</h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto">
                Jangan ragu untuk menghubungi saya. Saya siap membantu mewujudkan ide Anda menjadi kenyataan.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-4 mb-12">
                <a href="mailto:email@example.com" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-flex items-center justify-center">
                    <i class="fa-regular fa-envelope mr-2"></i>
                    email@example.com
                </a>
                <a href="tel:+628123456789" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition inline-flex items-center justify-center">
                    <i class="fa-brands fa-whatsapp mr-2"></i>
                    +62 812-3456-789
                </a>
            </div>
            
            {{-- Social Media --}}
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-white hover:text-gray-200 transition text-2xl">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 transition text-2xl">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 transition text-2xl">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-200 transition text-2xl">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p>&copy; 2024 John Doe. All rights reserved.</p>
        </div>
    </footer>

    {{-- Script untuk mobile menu --}}
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                    // Tutup mobile menu jika terbuka
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>