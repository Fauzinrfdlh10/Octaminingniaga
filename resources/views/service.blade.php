<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpeg" type="image/x-icon">
  <title>Koperasi Produsen Energi, Pertambangan dan Perdagangan</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .team-member {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin: 10px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 200px;
    }

    .team-member h3 {
      margin: 0;
      font-size: 18px;
      color: #333;
    }

    .team-member p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #777;
    }

    .top-members {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }

    .img-box img {
      width: 100px; /* Ukuran foto disesuaikan */
      height: 100px; /* Ukuran foto disesuaikan */
      border-radius: 50%; /* Membuat foto bulat */
      object-fit: cover; /* Memastikan foto tidak terdistorsi */
    }

    .service_owl-carousel .img-box img {
      width: 150px; /* Ukuran foto di carousel */
      height: 150px; /* Ukuran foto di carousel */
      border-radius: 50%; /* Membuat foto bulat */
      object-fit: cover; /* Memastikan foto tidak terdistorsi */
    }
    
    /* Navbar Styles - Warna Abu Tua */
    .header_bottom {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        background: #333; /* Warna abu tua solid */
        padding: 10px 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    
    .navbar {
        padding: 0;
    }
    
    .navbar-nav {
        align-items: center;
    }
    
    .nav-item {
        margin: 0 8px;
    }
    
    .nav-link {
        color: white !important;
        font-weight: 500;
        font-size: 14px;
        padding: 10px 15px !important;
        text-transform: uppercase;
        transition: all 0.3s;
        border-radius: 4px;
    }
    
    .nav-link:hover {
        color: white !important;
        background-color: #555; /* Warna abu lebih terang saat hover */
    }
    
    .dropdown-menu {
        background-color: #444; /* Warna abu untuk dropdown */
        border: none;
        border-radius: 0 0 5px 5px;
    }
    
    .dropdown-item {
        color: white !important;
        padding: 10px 20px;
        transition: all 0.2s;
    }
    
    .dropdown-item:hover {
        background-color: #555; /* Warna hover untuk dropdown item */
    }
    
    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5);
    }
    
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .navbar-collapse {
            background-color: #333; /* Warna sama dengan desktop */
            padding: 15px;
            margin-top: 10px;
            border-radius: 5px;
        }
        
        .nav-item {
            margin: 5px 0;
        }
        
        .dropdown-menu {
            background-color: #444;
            margin-left: 15px;
        }
    }
    
    @media (max-width: 768px) {
        .nav-link {
            font-size: 13px;
            padding: 8px 12px !important;
        }
        
        .navbar-brand img {
            height: 40px !important;
        }
    }
  </style>
</head>

<body>
  <audio id="background-music" autoplay loop>
    <source src="images/WhatsApp Audio 2025-03-22 at 01.08.14.mpeg" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>
  
  <!-- Navbar -->
  <div class="header_bottom">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
                <img src="" alt="" style="height: 50px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Top Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="service.html">Pendiri Koperasi</a>
                            <a class="dropdown-item" href="advisor pengawas.html">Advisor Koperasi</a>
                            <a class="dropdown-item" href="legal koperasi.html">Legal Koperasi</a>
                            <a class="dropdown-item" href="dewan pengawas.html">Dewan Pengawas</a>
                            <a class="dropdown-item" href="anggota.html">Anggota Koperasi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio.html">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.html">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                    <!-- Dropdown Bahasa -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" 
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://flagcdn.com/id.svg" alt="Indonesia" style="width: 20px; height: auto;"> ID
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="#" data-lang="id">
                                <img src="https://flagcdn.com/id.svg" alt="Indonesia" style="width: 20px; height: auto;"> Indonesia
                            </a>
                            <a class="dropdown-item" href="#" data-lang="en">
                                <img src="https://flagcdn.com/gb.svg" alt="English" style="width: 20px; height: auto;"> English
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
  </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 id="sectionTitle">
          STRUKTUR KOPERASI <br> OCTA MINING NIAGA
        </h2>
        <p id="sectionDescription" class="col-lg-8 px-0">
          PENDIRI KOPERASI
        </p>
      </div>

      <!-- Ketua, Wakil Ketua, dan Bendahara -->
     <div class="box">
        <div class="img-box">
        <img src="images/s1.png" alt="Abdul Majid Rahman" /> <!-- Add this line -->
        </div>
        <div class="detail-box">
          <p>Letjen TNI (Purn) HBL Mantiri.</p>
        </div>
      </div>
        <div class="box">
        <div class="img-box">
        <img src="images/11.jpeg" alt="Abdul Majid Rahman" /> <!-- Add this line -->
        </div>
        <div class="detail-box">
          <p>Stephen Leendertz, Consultan Mining Of Jerman.</p>
      </div>
      </div>
         <div class="box">
        <div class="img-box">
        <img src="images/9.PNG" alt="Abdul Majid Rahman" /> <!-- Add this line -->
        </div>
        <div class="detail-box">
          <p>Andi Indah Sari, Master Of Engineering.</p>
      </div>
      </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
<footer class="footer_section">
  <div class="container">
    <p id="footerText">
      &copy; <span id="displayYear"></span> All Rights Reserved By Octa Mining Niaga
    </p>
  </div>
</footer>

<style>
  /* Footer Styles - Matching Navbar Exactly */
  .footer_section {
    background-color: #333; /* Exact same dark gray as navbar */
    color: white;
    padding: 20px 0;
    margin-top: 50px;
    box-shadow: 0 -2px 10px rgba(0,0,0,0.2); /* Similar shadow effect as navbar */
    position: relative;
    z-index: 100;
  }
  
  .footer_section p {
    margin: 0;
    text-align: center;
    font-size: 14px;
    font-weight: 500; /* Matching navbar font weight */
    letter-spacing: 0.5px; /* Similar letter spacing */
    text-transform: uppercase; /* Matching navbar text transform */
  }
  
  /* Hover effect for potential future interactive elements */
  .footer_section a:hover {
    color: #ddd !important;
    transition: all 0.3s; /* Matching navbar transition */
  }
  
  /* Responsive adjustments - Consistent with navbar breakpoints */
  @media (max-width: 992px) {
    .footer_section {
      padding: 15px 0;
    }
  }
  
  @media (max-width: 768px) {
    .footer_section p {
      font-size: 12px;
    }
  }
</style>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <script>
    // Data konten dalam dua bahasa
    const content = {
      id: {
        sectionTitle: "STRUKTUR KOPERASI <br> OCTA MINING NIAGA",
        sectionDescription: "PENASEHAT KOPERASI",
        position1: "",
        position2: "",
        position3: "",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      },
      en: {
        sectionTitle: "STRUCTURE OF <br> OCTA MINING NIAGA COOPERATIVE",
        sectionDescription: "COOPERATIVE ADVISOR",
        position1: "",
        position2: "",
        position3: "",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      }
    };

    // Fungsi untuk mengubah bahasa
    function changeLanguage(lang) {
      document.getElementById("sectionTitle").innerHTML = content[lang].sectionTitle;
      document.getElementById("sectionDescription").textContent = content[lang].sectionDescription;
      document.getElementById("position1").textContent = content[lang].position1;
      document.getElementById("position2").textContent = content[lang].position2;
      document.getElementById("position3").textContent = content[lang].position3;
      document.getElementById("footerText").innerHTML = content[lang].footerText;

      // Simpan preferensi bahasa ke localStorage
      localStorage.setItem("language", lang);
    }

    // Event listener untuk dropdown bahasa
    document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        const lang = this.getAttribute('data-lang');
        changeLanguage(lang);
      });
    });

    // Set bahasa awal saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
      const savedLang = localStorage.getItem("language") || "id"; // Default bahasa Indonesia
      changeLanguage(savedLang);
    });
  </script>
  
  <script>
    const audio = document.getElementById('background-music');
const musicParts = [
  { start: 33, end: 264 }, // menit ke-0.33 - 4.44
  { start: 264, end: audio.duration } // menit ke-4.44 - akhir lagu
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