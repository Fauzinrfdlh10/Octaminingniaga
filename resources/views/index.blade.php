<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="BKLAS34hS6yyXbdnQXiTVokpxTexA1OhZaH_czOijWw" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/favicon.jpeg" type="image/x-icon">
    <title>Koperasi Produsen Energi, Pertambangan dan Perdagangan</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3498db',
                        secondary: '#2c3e50',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        display: ['Montserrat', 'sans-serif'],
                        trajan: ['Trajan Pro', 'Cinzel', 'serif'],
                    },
                    animation: {
                        'fadeIn': 'fadeIn 1s ease-out forwards',
                        'slideUp': 'slideUp 1s ease-out forwards',
                        'fadeInUp': 'fadeInUp 1s ease forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(50px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    
    <style type="text/css">
        @font-face {
            font-family: 'Trajan Pro';
            src: url('fonts/TrajanPro-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        
        .fade-in-section {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.4,0,0.2,1), transform 0.8s cubic-bezier(0.4,0,0.2,1);
            will-change: opacity, transform;
        }
        
        .fade-in-section.visible {
            opacity: 1;
            transform: none;
        }
        
        .hero-bg {
            background-size: cover;
            background-position: center;
            transition: transform 10s ease;
        }
        
        .hero-bg.zoom {
            transform: scale(1.1);
        }
        
        .partner-logo {
            transition: all 0.3s ease;
            opacity: 0.9;
        }
        
        .partner-logo:hover {
            opacity: 1;
            transform: scale(1.1);
        }
        
        .team-member-img {
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .team-member-img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #3498db;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .sticky-nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            animation: slideDown 0.5s ease forwards;
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }
        
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            z-index: 1001;
            transition: width 0.2s ease;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(52, 152, 219, 0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: rgba(52, 152, 219, 0.9);
            transform: translateY(-5px);
        }
        
        /* Warna khusus untuk mitra dan bank */
        .partner-bg-1 {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border: 2px solid #64b5f6;
        }
        
        .partner-bg-2 {
            background: linear-gradient(135deg, #fbe9e7 0%, #ffccbc 100%);
            border: 2px solid #ff8a65;
        }
        
        .partner-bg-3 {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            border: 2px solid #81c784;
        }
        
        .partner-bg-4 {
            background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
            border: 2px solid #ffb74d;
        }
        
        .partner-bg-5 {
            background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%);
            border: 2px solid #ba68c8;
        }
        
        .partner-bg-6 {
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
            border: 2px solid #4dd0e1;
        }
        
        .partner-bg-7 {
            background: linear-gradient(135deg, #fff8e1 0%, #ffecb3 100%);
            border: 2px solid #ffd54f;
        }
        
        .partner-bg-8 {
            background: linear-gradient(135deg, #efebe9 0%, #d7ccc8 100%);
            border: 2px solid #a1887f;
        }
        
        .bank-bg-1 {
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            border: 2px solid #4caf50;
        }
        
        .bank-bg-2 {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border: 2px solid #2196f3;
        }
        
        @media (max-width: 768px) {
            .hero-bg:nth-child(1) {
                background-image: url('images/bg-new/bg-1-mobile.jpeg') !important;
            }
            .hero-bg:nth-child(2) {
                background-image: url('images/bg-new/bg-2-mobile.jpeg') !important;
            }
            .hero-bg:nth-child(3) {
                background-image: url('images/bg-new/enhanced_image-mobile.jpeg') !important;
            }
        }
    </style>
</head>

<body class="font-sans bg-gray-50 flex flex-col min-h-screen">
    <!-- Progress Bar -->
    <div class="progress-bar"></div>
    
    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <audio id="background-music" autoplay loop>
        <source src="images/WhatsApp Audio 2025-03-22 at 01.08.14.mpeg" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    
    <!-- Hero Section -->
    <div class="relative h-screen overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-cover bg-center transition-all duration-1000 hero-bg zoom" style="background-image: url('images/bg-new/bg-new1.jpeg');"></div>
        </div>
        
        <!-- Navbar -->
        <nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-black bg-opacity-70 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <a href="index.html" class="flex-shrink-0">
                        <img src="" alt="" class="h-12 w-auto">
                    </a>
                    
                    <!-- Hamburger Button -->
                    <button id="mobile-menu-btn" class="lg:hidden text-white focus:outline-none">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
                        </svg>
                    </button>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-8">
                        <a href="index.html" class="text-white hover:text-primary transition-colors nav-link">Home</a>
                        <a href="about.html" class="text-white hover:text-primary transition-colors nav-link">About</a>
                        
                        <div class="relative group">
                            <button class="text-white hover:text-primary transition-colors flex items-center nav-link">
                                Top Management <i class="fas fa-chevron-down text-xs ml-1 mt-1 transition-transform group-hover:rotate-180"></i>
                            </button>
                            <div class="absolute hidden group-hover:block w-48 bg-black bg-opacity-90 mt-2 rounded-md overflow-hidden z-50">
                                <a href="service.html" class="block px-4 py-2 text-white hover:bg-primary transition-colors">Penasehat</a>
                                <a href="advisor pengawas.html" class="block px-4 py-2 text-white hover:bg-primary transition-colors">Pendiri</a>
                                <a href="legal koperasi.html" class="block px-4 py-2 text-white hover:bg-primary transition-colors">Pengurus</a>
                                <a href="dewan pengawas.html" class="block px-4 py-2 text-white hover:bg-primary transition-colors">Pengawas</a>
                                <a href="anggota.html" class="block px-4 py-2 text-white hover:bg-primary transition-colors">Anggota</a>
                            </div>
                        </div>
                        
                        <a href="team.html" class="text-white hover:text-primary transition-colors nav-link">Contact</a>
                        <a href="portofolio.html" class="text-white hover:text-primary transition-colors nav-link">Portofolio</a>
                        <a href="berita.html" class="text-white hover:text-primary transition-colors nav-link">Berita</a>
                        <a href="galeri.html" class="text-white hover:text-primary transition-colors nav-link">Galeri</a>
                        
                        <div class="relative group">
                            <button class="text-white flex items-center gap-2 nav-link">
                                <img src="https://flagcdn.com/id.svg" alt="Indonesia" class="w-5 h-5"> ID
                            </button>
                            <div class="absolute hidden group-hover:block w-40 bg-black bg-opacity-90 mt-2 rounded-md overflow-hidden right-0 z-50">
                                <a href="#" class="block px-4 py-2 text-white hover:bg-primary transition-colors dropdown-item flex items-center" data-lang="id">
                                    <img src="https://flagcdn.com/id.svg" alt="Indonesia" class="w-5 h-5 mr-2"> Indonesia
                                </a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-primary transition-colors dropdown-item flex items-center" data-lang="en">
                                    <img src="https://flagcdn.com/gb.svg" alt="English" class="w-5 h-5 mr-2"> English
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="lg:hidden hidden flex-col bg-black bg-opacity-90 rounded-md mt-2 px-4 py-4 space-y-2">
                    <a href="index.html" class="block text-white hover:text-primary transition-colors py-2">Home</a>
                    <a href="about.html" class="block text-white hover:text-primary transition-colors py-2">About</a>
                    
                    <!-- Top Management collapsible -->
                    <button id="mobile-top-btn" class="w-full text-left text-white hover:text-primary transition-colors flex items-center justify-between py-2">
                        Top Management
                        <span id="mobile-top-arrow" class="ml-2">&#9660;</span>
                    </button>
                    
                    <div id="mobile-top-menu" class="hidden flex-col pl-4 space-y-1">
                        <a href="service.html" class="block text-white hover:text-primary transition-colors py-1">Penasehat</a>
                        <a href="advisor pengawas.html" class="block text-white hover:text-primary transition-colors py-1">Pendiri</a>
                        <a href="legal koperasi.html" class="block text-white hover:text-primary transition-colors py-1">Pengurus</a>
                        <a href="dewan pengawas.html" class="block text-white hover:text-primary transition-colors py-1">Pengawas</a>
                        <a href="anggota.html" class="block text-white hover:text-primary transition-colors py-1">Anggota</a>
                    </div>
                    
                    <a href="team.html" class="block text-white hover:text-primary transition-colors py-2">Contact</a>
                    <a href="portofolio.html" class="block text-white hover:text-primary transition-colors py-2">Portofolio</a>
                    <a href="berita.html" class="block text-white hover:text-primary transition-colors py-2">Berita</a>
                    <a href="galeri.html" class="block text-white hover:text-primary transition-colors py-2">Galeri</a>
                    
                    <!-- Language Switcher -->
                    <div class="flex gap-2 mt-4 pt-4 border-t border-gray-700">
                        <a href="#" class="dropdown-item flex items-center gap-1 text-white hover:text-primary px-3 py-2 rounded transition-colors" data-lang="id">
                            <img src="https://flagcdn.com/id.svg" alt="Indonesia" class="w-5 h-5"> ID
                        </a>
                        <a href="#" class="dropdown-item flex items-center gap-1 text-white hover:text-primary px-3 py-2 rounded transition-colors" data-lang="en">
                            <img src="https://flagcdn.com/gb.svg" alt="English" class="w-5 h-5"> EN
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Hero Content -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <div class="text-center text-white px-4 max-w-4xl mx-auto">
                <h1 id="heading" class="text-5xl md:text-6xl font-display font-bold mb-6 leading-tight animate-fadeIn">Koperasi Energi <br> Pertambangan, Perdagangan</h1>
                <p id="subheading" class="text-xl md:text-2xl mb-4 animate-slideUp">Ayo Bermitra Bersama Kami. Untuk Menjadi Anggota Koperasi Menuju Perubahan</p>
                <p id="tagline" class="text-xl font-bold animate-fadeIn"># Indonesia Emas #</p>
                
                <div class="mt-12 animate-fadeIn" style="animation-delay: 0.5s;">
                    <a href="#about" class="inline-flex items-center bg-primary hover:bg-blue-600 text-white font-medium py-3 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                        Jelajahi Lebih Lanjut
                        <i class="fas fa-arrow-down ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
            <div class="w-6 h-10 border-2 border-white border-opacity-50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white bg-opacity-50 rounded-full mt-2"></div>
            </div>
        </div>
    </div>

    <!-- Service Section -->
    <section id="about" class="py-20 bg-white fade-in-section">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto">
                <h2 id="sectionTitle" class="text-4xl font-bold text-secondary mb-8">Koperasi Octa Mining Niaga penggerak perekonomian rakyat.</h2>
                <p id="sectionContent" class="text-lg text-gray-600 mb-6">
                    Koperasi Octa Mining Niaga penggerak perekonomian rakyat secara Integrated Coorportation, Digitalisasi Koperasi Octa Mining Niaga mulai melakukan transformasi digital secara bertahap, Hadir untuk membantu kesejahteraan masyarakat di sekitar dan terus berupaya berinovasi dalam pengembangan koperasi yang lebih modern.
                </p>
                <p id="sectionContent" class="text-lg text-gray-600 mb-6">
                    Octa Mining Niaga Adalah Koperasi Produsen Energi Terbarukan, Pertambangan, Perdagangan yang Mengubah Paradigma Di Indonesia Yang Menerapkan Eco-friendly Atau Ramah Lingkungan Yang Inovatif. Bertujuan Untuk Mewujudkan Cita-Cita Pada Pasal 33 Ayat (3) Undang-Undang Dasar (UUD) 1945. Pasal Tersebut Menjelaskan Bahwa Bumi, Air, Dan Kekayaan Alam Yang Berada Di Dalamnya Dikuasai Oleh Negara Dan Dimanfaatkan Untuk Kesejahteraan Rakyat. Serta Konsep Rantai Pasok Dalam Dunia Perdagangan Sub-Sektor Mikro ,UMKM, Makro. Dalam Rangka Mendukung Program Strategic Pemerintah Dalam Upaya Meningkatkan Kesejahteraan Masyarakat Luas Dan Tunas - Tunas Bangsa Indonesia.
                </p>
                <p id="sectionTagline" class="text-lg font-bold text-primary mb-2"># Indonesia Emas #</p>
                <p id="sectionSolution" class="text-lg italic text-secondary">" Your Trade Solution "</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-100 fade-in-section">
        <div class="container mx-auto px-4">
            <h2 id="teamTitle" class="text-3xl font-bold text-center mb-4 text-secondary">Sumber Daya Manusia</h2>
            <p id="teamSubtitle" class="text-center mb-8 text-primary font-semibold">Didukung oleh IATPI</p>
            
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center w-80 hover:shadow-2xl transition-all duration-300 fade-in">
                    <img src="images/t1.png" alt="Randi Mamola" class="w-56 h-40 object-contain mb-4 border-4 border-primary rounded-lg bg-white team-member-img">
                    <h5 class="font-trajan font-bold text-lg mb-1 text-secondary">Randi Mamola</h5>
                    <h6 class="text-primary font-semibold">Bendahara</h6>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center w-80 hover:shadow-2xl transition-all duration-300 fade-in" style="animation-delay: 0.3s;">
                    <img src="images/t3.png" alt="Muhammad Khaliq Mantiri" class="w-56 h-40 object-contain mb-4 border-4 border-primary rounded-lg bg-white team-member-img">
                    <h5 class="font-trajan font-bold text-lg mb-1 text-secondary">Muhammad Khaliq Mantiri</h5>
                    <h6 class="text-primary font-semibold">Sekretaris</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Mitra Section -->
    <section class="py-16 bg-white fade-in-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-secondary">Mitra Kami</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-1">
                        <img src="images/esdm-removebg-preview (1).png" alt="Mitra 1" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">ESDM</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-2">
                        <img src="images/kemenko.png" alt="Mitra 2" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">Kemenko</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-3">
                        <img src="images/lingkungan-removebg-preview.png" alt="Mitra 3" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">Lingkungan</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-full shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-4">
                        <img src="images/itb.png" alt="Mitra 4" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">ITB</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-5">
                        <img src="images/al.png" alt="Mitra 5" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">AL</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-6">
                        <img src="images/LOGO_KOARMADA_RI_PNG.png" alt="Mitra 6" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">KOARMADA</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-7">
                        <img src="images/siloam.png" alt="Mitra 7" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">Siloam</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo partner-bg-8">
                        <img src="images/iacpi-removebg-preview.png" alt="Mitra 8" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">IACPI</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Bank Section -->
    <section class="py-16 bg-gray-100 fade-in-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-secondary">Bank</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center max-w-2xl mx-auto">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo bank-bg-1">
                        <img src="images/bca.png" alt="Bank BCA" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">BCA</span>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 rounded-lg shadow-md mb-2 flex items-center justify-center p-2 partner-logo bank-bg-2">
                        <img src="images/bank-sulut.png" alt="Bank Sulut" class="w-full h-full object-contain">
                    </div>
                    <span class="text-xs text-secondary font-semibold">Bank Sulut</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-700 py-8 w-full mt-auto">
        <div class="container mx-auto px-4">
            <p id="footerText" class="text-center text-white opacity-90">
                &copy; <span id="displayYear"></span> All Rights Reserved By Octa Mining Niaga
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Set current year in the footer
        document.getElementById('displayYear').textContent = new Date().getFullYear();
        
        // Sticky navbar on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const progressBar = document.querySelector('.progress-bar');
            const backToTop = document.querySelector('.back-to-top');
            
            if (window.scrollY > 100) {
                navbar.classList.add('sticky-nav');
                backToTop.classList.add('visible');
            } else {
                navbar.classList.remove('sticky-nav');
                backToTop.classList.remove('visible');
            }
            
            // Progress bar
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const scrollTop = window.scrollY;
            const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
            progressBar.style.width = scrollPercent + '%';
        });
        
        // Back to top functionality
        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        
        // Mobile Top Management toggle
        document.getElementById('mobile-top-btn').addEventListener('click', function() {
            const submenu = document.getElementById('mobile-top-menu');
            const arrow = document.getElementById('mobile-top-arrow');
            submenu.classList.toggle('hidden');
            arrow.innerHTML = submenu.classList.contains('hidden') ? '&#9660;' : '&#9650;';
        });
        
        // Fade in elements on scroll
        const fadeElements = document.querySelectorAll('.fade-in-section');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    fadeInObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });
        
        fadeElements.forEach(element => {
            fadeInObserver.observe(element);
        });
        
        // Background image zoom effect on hero section
        const heroBg = document.querySelector('.hero-bg');
        
        heroBg.addEventListener('mousemove', function(e) {
            const moveX = (e.pageX * -1 / 15);
            const moveY = (e.pageY * -1 / 15);
            this.style.transform = `scale(1.1) translateX(${moveX}px) translateY(${moveY}px)`;
        });
        
        heroBg.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1.1) translateX(0px) translateY(0px)';
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
        
        // Language switching functionality
        const content = {
            id: {
                heading: "Koperasi Energi <br> Pertambangan, Perdagangan",
                subheading: "Ayo Bermitra Bersama Kami. Untuk Menjadi Anggota Koperasi Menuju Perubahan",
                tagline: "# Indonesia Emas #",
                sectionTitle: "Koperasi Octa Mining Niaga penggerak perekonomian rakyat.",
                sectionContent: "Koperasi Octa Mining Niaga penggerak perekonomian rakyat secara Integrated Coorportation, Digitalisasi Koperasi Octa Mining Niaga mulai melakukan transformasi digital secara bertahap, Hadir untuk membantu kesejahteraan masyarakat di sekitar dan terus berupaya berinovasi dalam pengembangan koperasi yang lebih modern.",
                sectionContent2: "Octa Mining Niaga Adalah Koperasi Produsen Energi Terbarukan, Pertambangan, Perdagangan yang Mengubah Paradigma Di Indonesia Yang Menerapkan Eco-friendly Atau Ramah Lingkungan Yang Inovatif. Bertujuan Untuk Mewujudkan Cita-Cita Pada Pasal 33 Ayat (3) Undang-Undang Dasar (UUD) 1945. Pasal Tersebut Menjelaskan Bahwa Bumi, Air, Dan Kekayaan Alam Yang Berada Di Dalamnya Dikuasai Oleh Negara Dan Dimanfaatkan Untuk Kesejahteraan Rakyat. Serta Konsep Rantai Pasok Dalam Dunia Perdagangan Sub-Sektor Mikro ,UMKM, Makro. Dalam Rangka Mendukung Program Strategic Pemerintah Dalam Upaya Meningkatkan Kesejahteraan Masyarakat Luas Dan Tunas - Tunas Bangsa Indonesia.",
                sectionTagline: "# Indonesia Emas #",
                sectionSolution: '" Your Trade Solution "',
                teamTitle: "Sumber Daya Manusia",
                teamSubtitle: "Didukung oleh IATPI",
                footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
            },
            en: {
                heading: "Energy Cooperative <br> Mining, Trade",
                subheading: "Let's Partner With Us. To Become a Cooperative Member Towards Change",
                tagline: "# Golden Indonesia #",
                sectionTitle: "Octa Mining Niaga Cooperative, driving the people's economy.",
                sectionContent: "Octa Mining Niaga Cooperative drives the people's economy through Integrated Corporation. The digitalization of Octa Mining Niaga Cooperative is gradually undergoing digital transformation, Present to help the welfare of the surrounding community and continues to strive for innovation in developing more modern cooperatives.",
                sectionContent2: "Octa Mining Niaga is a Cooperative Producer of Renewable Energy, Mining, and Trade that Changes the Paradigm in Indonesia by Applying Eco-friendly and Innovative Approaches. Aiming to realize the ideals of Article 33 paragraph (3) of the 1945 Constitution. The article explains that the earth, water, and natural resources contained therein are controlled by the state and used for the welfare of the people. As well as the Supply Chain Concept in the World of Trade in the Micro, MSME, and Macro Sub-Sectors. In Order to Support the Government's Strategic Programs in Efforts to Improve the Welfare of the Wider Community and Indonesia's Young Generation.",
                sectionTagline: "# Golden Indonesia #",
                sectionSolution: '" Your Trade Solution "',
                teamTitle: "Human Resources",
                teamSubtitle: "Supported by IATPI",
                footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
            }
        };
        // Function to change language
        function changeLanguage(lang) {
            document.getElementById("heading").innerHTML = content[lang].heading;
            document.getElementById("subheading").textContent = content[lang].subheading;
            document.getElementById("tagline").textContent = content[lang].tagline;
            document.getElementById("sectionTitle").textContent = content[lang].sectionTitle;
            
            const sectionContents = document.querySelectorAll("#sectionContent");
            if (sectionContents.length >= 1) {
                sectionContents[0].textContent = content[lang].sectionContent;
            }
            if (sectionContents.length >= 2) {
                sectionContents[1].textContent = content[lang].sectionContent2;
            }
            
            document.getElementById("sectionTagline").textContent = content[lang].sectionTagline;
            document.getElementById("sectionSolution").textContent = content[lang].sectionSolution;
            document.getElementById("teamTitle").textContent = content[lang].teamTitle;
            document.getElementById("teamSubtitle").textContent = content[lang].teamSubtitle;
            document.getElementById("footerText").innerHTML = content[lang].footerText;

            localStorage.setItem("language", lang);
        }

        // Event listeners for language dropdown
        document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                const lang = this.getAttribute('data-lang');
                changeLanguage(lang);
                
                // Update dropdown label
                const flagSrc = this.querySelector('img').src;
                const flagAlt = this.querySelector('img').alt;
                const label = this.textContent.trim();
                
                const languageButton = document.querySelector('.group button.flex.items-center.gap-2');
                if (languageButton) {
                    languageButton.innerHTML = `
                        <img src="${flagSrc}" alt="${flagAlt}" class="w-5 h-5"> ${lang.toUpperCase()}
                    `;
                }
            });
        });

        // Set initial language on page load
        document.addEventListener("DOMContentLoaded", function () {
            const savedLang = localStorage.getItem("language") || "id";
            changeLanguage(savedLang);
        });
        
        // Background music control
        const audio = document.getElementById('background-music');
        const musicParts = [
            { start: 33, end: 264 },
            { start: 264, end: audio.duration }
        ];

        let currentPart = localStorage.getItem('currentPart') || 0;
        let currentTime = localStorage.getItem('currentTime') || musicParts[currentPart].start;
        audio.currentTime = currentTime;

        audio.addEventListener('timeupdate', () => {
            localStorage.setItem('currentTime', audio.currentTime);
            localStorage.setItem('currentPart', currentPart);
            if (audio.currentTime >= musicParts[currentPart].end) {
                currentPart++;
                if (currentPart >= musicParts.length) {
                    currentPart = 0;
                    audio.currentTime = musicParts[currentPart].start;
                } else {
                    audio.currentTime = musicParts[currentPart].start;
                }
            }
        });
    </script>
</body>
</html>