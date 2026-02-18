{{-- resources/views/home.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Saya</title>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 4s ease-in-out infinite;
        }

        .glass {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
        }

        .gradient-text {
            background: linear-gradient(to right, #ffffff, #dbeafe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-hover:hover {
            transform: translateY(-10px);
        }
    </style>
</head>

<body class="font-sans antialiased">

{{-- NAVBAR --}}
<nav class="glass fixed w-full z-50 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-white">
                <a href="#home">PortfolioKu</a>
            </div>

            <div class="hidden md:flex space-x-8 text-white">
                <a href="#home" class="hover:text-blue-200 transition">Home</a>
                <a href="#about" class="hover:text-blue-200 transition">Tentang</a>
                <a href="#projects" class="hover:text-blue-200 transition">Proyek</a>
                <a href="#services" class="hover:text-blue-200 transition">Layanan</a>
                <a href="#contact" class="hover:text-blue-200 transition">Kontak</a>
            </div>

            <button class="md:hidden text-white" onclick="toggleMenu()">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden pb-4 text-white">
            <a href="#home" class="block py-2">Home</a>
            <a href="#about" class="block py-2">Tentang</a>
            <a href="#projects" class="block py-2">Proyek</a>
            <a href="#services" class="block py-2">Layanan</a>
            <a href="#contact" class="block py-2">Kontak</a>
        </div>
    </div>
</nav>

{{-- HERO --}}
<section id="home" class="pt-24 bg-gradient-to-r from-blue-600 to-purple-700 text-white">
    <div class="max-w-6xl mx-auto px-4 py-24 text-center">

        <div class="mb-8 floating">
            <div class="w-40 h-40 mx-auto bg-white rounded-full overflow-hidden border-4 border-white shadow-2xl">
                <img src="https://via.placeholder.com/200" class="w-full h-full object-cover">
            </div>
        </div>

        <h1 class="text-5xl font-bold mb-4 gradient-text">
            John Doe
        </h1>

        <p class="text-2xl mb-6">
            <span id="typing"></span>
        </p>

        <p class="max-w-2xl mx-auto mb-10 text-lg">
            Saya seorang pengembang web yang passionate dalam menciptakan solusi digital yang kreatif dan inovatif.
        </p>

        <div class="flex justify-center gap-4">
            <a href="#contact"
               class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold transition duration-300 hover:scale-110 hover:shadow-xl">
                Hubungi Saya
            </a>

            <a href="#projects"
               class="border-2 border-white px-8 py-3 rounded-full font-semibold transition duration-300 hover:bg-white hover:text-blue-600 hover:scale-110">
                Lihat Proyek
            </a>
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section id="about" class="py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Tentang Saya</h2>

        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="https://via.placeholder.com/500x400"
                     class="rounded-xl shadow-2xl w-full">
            </div>

            <div class="md:w-1/2" data-aos="fade-left">
                <h3 class="text-2xl font-semibold mb-4">Halo, Saya John Doe</h3>
                <p class="text-gray-600 mb-6">
                    Saya adalah seorang pengembang web berpengalaman dalam membangun aplikasi modern, responsif, dan scalable.
                </p>

                <div class="grid grid-cols-2 gap-4">
                    <span>✔ HTML & CSS</span>
                    <span>✔ JavaScript</span>
                    <span>✔ Laravel</span>
                    <span>✔ React</span>
                    <span>✔ MySQL</span>
                    <span>✔ UI/UX</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROJECTS --}}
<section id="projects" class="py-24">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16" data-aos="fade-up">Proyek Terbaru</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6 transition duration-500 card-hover"
                 data-aos="zoom-in">
                <h3 class="text-xl font-semibold mb-3">E-commerce App</h3>
                <p class="text-gray-600">Website toko online lengkap dengan payment gateway.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 transition duration-500 card-hover"
                 data-aos="zoom-in">
                <h3 class="text-xl font-semibold mb-3">Portfolio Website</h3>
                <p class="text-gray-600">Website modern dengan animasi interaktif.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 transition duration-500 card-hover"
                 data-aos="zoom-in">
                <h3 class="text-xl font-semibold mb-3">Inventory System</h3>
                <p class="text-gray-600">Sistem manajemen stok berbasis Laravel.</p>
            </div>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section id="services" class="py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-16" data-aos="fade-up">Layanan</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md transition duration-500 card-hover"
                 data-aos="fade-up">
                <i class="fa-solid fa-code text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                <p class="text-gray-600">Website modern & responsif.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md transition duration-500 card-hover"
                 data-aos="fade-up">
                <i class="fa-solid fa-paint-brush text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-3">UI/UX Design</h3>
                <p class="text-gray-600">Desain menarik & user friendly.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md transition duration-500 card-hover"
                 data-aos="fade-up">
                <i class="fa-solid fa-mobile-screen text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-xl font-semibold mb-3">Mobile App</h3>
                <p class="text-gray-600">Aplikasi cross-platform.</p>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT --}}
<section id="contact" class="py-24 bg-gradient-to-r from-blue-600 to-purple-700 text-white text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Hubungi Saya</h2>
        <p class="mb-8">Siap bekerja sama dan membangun proyek hebat bersama Anda.</p>

        <a href="mailto:email@example.com"
           class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold transition duration-300 hover:scale-110">
            Kirim Email
        </a>
    </div>
</section>

<footer class="bg-gray-900 text-white text-center py-6">
    © 2026 John Doe. All rights reserved.
</footer>

{{-- SCRIPTS --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({ duration: 1000, once: true });

    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    }

    // Typing effect
    const text = "Web Developer & Designer";
    let i = 0;
    function typing() {
        if (i < text.length) {
            document.getElementById("typing").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, 70);
        }
    }
    window.onload = typing;
</script>

</body>
</html>
