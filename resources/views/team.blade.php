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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Fonts Style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- Nice Select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    /* Modern Navbar Styles */
    .header_bottom {
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: rgba(51, 51, 51, 0.98);
      padding: 10px 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .navbar-brand img {
      height: 50px;
      transition: all 0.3s;
    }
    
    .nav-item {
      margin: 0 5px;
      position: relative;
    }
    
    .nav-link {
      color: white !important;
      font-weight: 600;
      font-size: 14px;
      padding: 12px 18px !important;
      text-transform: uppercase;
      transition: all 0.3s;
      letter-spacing: 0.5px;
      position: relative;
    }
    
    .nav-link:hover {
      color: #fff !important;
      transform: translateY(-2px);
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 8px;
      left: 18px;
      width: 0;
      height: 2px;
      background: #fff;
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
      width: calc(100% - 36px);
    }
    
    .dropdown-menu {
      background-color: rgba(68, 68, 68, 0.95);
      border: none;
      border-radius: 8px;
      padding: 10px 0;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }
    
    .dropdown-item {
      color: white !important;
      padding: 10px 20px;
      transition: all 0.2s;
      font-weight: 500;
    }
    
    .dropdown-item:hover {
      background-color: rgba(85, 85, 85, 0.7);
      padding-left: 25px;
    }
    
    .navbar-toggler {
      border: none;
      padding: 0.5rem;
    }
    
    .navbar-toggler:focus {
      outline: none;
      box-shadow: none;
    }
    
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      width: 1.5em;
      height: 1.5em;
    }

    /* Gaya untuk bagian kontak */
    .contact-section {
      padding: 60px 0;
      background: #f9f9f9;
    }
    .contact-box {
      text-align: center;
      padding: 30px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 20px;
      height: 100%;
    }
    .contact-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .contact-box i {
      font-size: 40px;
      color: #007bff;
      margin-bottom: 20px;
    }
    .contact-box h5 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 10px;
    }
    .contact-box a {
      color: #333;
      text-decoration: none;
      font-size: 16px;
      word-wrap: break-word;
    }
    .contact-box a:hover {
      color: #007bff;
    }

    /* Footer Styles to Match */
    .footer_section {
      background: #333;
      color: white;
      padding: 25px 0;
      margin-top: 50px;
      box-shadow: 0 -4px 12px rgba(0,0,0,0.15);
      border-top: 1px solid rgba(255,255,255,0.1);
    }
    
    .footer_section p {
      margin: 0;
      text-align: center;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    /* Responsif untuk mode mobile */
    @media (max-width: 992px) {
      .navbar-collapse {
        background: rgba(51, 51, 51, 0.98);
        padding: 15px;
        margin-top: 10px;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      }
      
      .nav-item {
        margin: 5px 0;
      }
      
      .dropdown-menu {
        background-color: rgba(85, 85, 85, 0.95);
        margin-left: 15px;
      }
      
      .navbar-brand img {
        height: 40px;
      }
    }
    
    @media (max-width: 768px) {
      .nav-link {
        font-size: 13px;
        padding: 10px 15px !important;
      }
      
      .navbar-brand img {
        height: 35px;
      }
      
      .contact-box {
        padding: 20px;
      }
      .contact-box h5 {
        font-size: 18px;
      }
      .contact-box a {
        font-size: 14px;
      }
      
      .footer_section p {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <audio id="background-music" autoplay loop>
    <source src="images/WhatsApp Audio 2025-03-22 at 01.08.14.mpeg" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  <!-- Modern Navbar -->
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <img src="" alt="">
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
              <div class="dropdown-menu transparent-box-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="service.html">Penasehat</a>
                            <a class="dropdown-item" href="advisor pengawas.html">Pendiri</a>
                            <a class="dropdown-item" href="legal koperasi.html">Pengurus</a>
                            <a class="dropdown-item" href="dewan pengawas.html">Pengawas</a>
                            <a class="dropdown-item" href="anggota.html">Anggota</a>
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
            <!-- Language Dropdown -->
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

  <!-- Kontak Section -->
  <section class="contact-section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 id="contactTitle">
          Kontak Kami
        </h2>
        <p id="contactDescription">
          Hubungi kami melalui media sosial atau email di bawah ini:
        </p>
      </div>
      <div class="row">
        <!-- Instagram -->
        <div class="col-md-3 col-sm-6 mx-auto">
          <div class="contact-box">
            <i class="fab fa-instagram"></i>
            <h5 id="instagramTitle">Instagram</h5>
            <a href="#" data-toggle="modal" data-target="#comingSoonModal" id="instagramLink">Cooming Soon</a>
          </div>
        </div>
        <!-- WhatsApp -->
        <div class="col-md-3 col-sm-6 mx-auto">
          <div class="contact-box">
            <i class="fab fa-whatsapp"></i>
            <h5 id="whatsappTitle">WhatsApp</h5>
            <a href="" target="_blank" id="whatsappLink">XXXXX</a>
          </div>
        </div>
        <!-- Email -->
        <div class="col-md-3 col-sm-6 mx-auto">
          <div class="contact-box">
            <i class="fas fa-envelope"></i>
            <h5 id="emailTitle">Email</h5>
            <a href="" id="emailLink">XXXXX</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Coming Soon -->
  <div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="comingSoonModalLabel">Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Coming Soon!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer_section">
    <div class="container">
      <p id="footerText">
        &copy; <span id="displayYear"></span> All Rights Reserved By Octa Mining Niaga
      </p>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.js"></script>
  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Nice Select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- Custom JS -->
  <script src="js/custom.js"></script>

  <script>
    // Data konten dalam dua bahasa
    const content = {
      id: {
        contactTitle: "Kontak Kami",
        contactDescription: "Hubungi kami melalui media sosial atau email di bawah ini:",
        instagramTitle: "Instagram",
        instagramLink: "Cooming Soon",
        whatsappTitle: "WhatsApp",
        whatsappLink: "XXXXX",
        facebookTitle: "Facebook",
        facebookLink: "Cooming Soon",
        emailTitle: "Email",
        emailLink: "XXXXX",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      },
      en: {
        contactTitle: "Contact Us",
        contactDescription: "Reach out to us via social media or email below:",
        instagramTitle: "Instagram",
        instagramLink: "Coming Soon",
        whatsappTitle: "WhatsApp",
        whatsappLink: "XXXXX",
        facebookTitle: "Facebook",
        facebookLink: "Coming Soon",
        emailTitle: "Email",
        emailLink: "XXXXX",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      }
    };

    // Fungsi untuk mengubah bahasa
    function changeLanguage(lang) {
      document.getElementById("contactTitle").textContent = content[lang].contactTitle;
      document.getElementById("contactDescription").textContent = content[lang].contactDescription;
      document.getElementById("instagramTitle").textContent = content[lang].instagramTitle;
      document.getElementById("instagramLink").textContent = content[lang].instagramLink;
      document.getElementById("whatsappTitle").textContent = content[lang].whatsappTitle;
      document.getElementById("whatsappLink").textContent = content[lang].whatsappLink;
      document.getElementById("facebookTitle").textContent = content[lang].facebookTitle;
      document.getElementById("facebookLink").textContent = content[lang].facebookLink;
      document.getElementById("emailTitle").textContent = content[lang].emailTitle;
      document.getElementById("emailLink").textContent = content[lang].emailLink;
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