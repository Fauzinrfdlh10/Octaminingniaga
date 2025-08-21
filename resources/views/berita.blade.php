<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/favicon.jpeg" type="image/x-icon">
  <title>Koperasi Produsen Energi, Pertambangan dan Perdagangan</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    /* Tambahkan di bagian style, setelah .article-section */
.article-section {
  padding: 60px 0;
  background-color: #f9f9f9;
  margin-top: 80px; /* Jarak dari navbar */
}
    .article-section {
      padding: 60px 0;
      background-color: #f9f9f9;
    }

    .article-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .article-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .article-card .card-body {
      padding: 20px;
    }

    .article-card h3 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .article-card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 15px;
    }

    .article-card a {
      color: #007bff;
      text-decoration: none;
      font-weight: 500;
    }

    .article-card a:hover {
      text-decoration: underline;
    }

    .footer_section {
      background-color: #222;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: relative;
      width: 100%;
    }

    .footer_section p {
      margin: 0;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .article-card img {
        height: 150px;
      }

      .article-card h3 {
        font-size: 18px;
      }

      .article-card p {
        font-size: 12px;
      }

      .footer_section {
        padding: 15px 10px;
      }

      .footer_section p {
        font-size: 14px;
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

<style>
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
  <!-- Artikel Berita -->
  <section class="article-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article1Title">17 Program Prioritas Prabowo - Gibran</h3>
              <p id="article1Desc">Prabowo Subianto dan Gibran Rakabuming Raka dijadwalkan untuk dilantik sebagai presiden dan wakil presiden Republik Indonesia periode 2024-2029 pada 20 Oktober 2024.</p>
              <a href="https://timesindonesia.co.id/pemerintahan/514897/17-program-prioritas-prabowo--gibran" id="article1Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article2Title">Mengenal Delapan Misi 'Asta Cita' Pemerintahan Prabowo-Gibran</h3>
              <p id="article2Desc">Presiden dan Wakil Presiden terpilih, Prabowo Subianto dan Gibran Rakabuming Raka.</p>
              <a href="https://www.rri.co.id/lain-lain/1103608/mengenal-delapan-misi-asta-cita-pemerintahan-prabowo-gibran" id="article2Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article3Title">Menkop Budi Arie Apresiasi Pengesahan RUU Minerba, Koperasi Diizinkan Kelola Tambang</h3>
              <p id="article3Desc">Kementerian Koperasi (Kemenkop) mengapresiasi pengesahan revisi Undang-Undang Nomor 4 Tahun 2009 tentang Mineral dan Batubara (Minerba).</p>
              <a href="https://www.tribunnews.com/bisnis/2025/02/18/menkop-budi-arie-apresiasi-pengesahan-ruu-minerba-koperasi-diizinkan-kelola-tambang" id="article3Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article4Title">Budi Arie Sebut Koperasi Desa Merah Putih Bisa Kelola Tambang</h3>
              <p id="article4Desc">Presiden Prabowo Subianto berencana membentuk 70 ribu koperasi desa (Kopdes) Merah Putih untuk memperbaiki tata kelola koperasi di desa.</p>
              <a href="https://finance.detik.com/energi/d-7818029/budi-arie-sebut-koperasi-desa-merah-putih-bisa-kelola-tambang" id="article4Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article4Title">Bekingin Tambang Ilegal, Jenderal TNI Polri-Parpol Diultimatum Prabowo </h3>
              <p id="article4Desc">Prabowo menyebut, pihaknya sudah mendapatkan laporan bahwa kini terdapat 1.063 tambang ilegal di Tanah Air. Akibat tambang ilegal ini, negara berpotensi merugi minimal sebesar Rp 300 triliun.</p>
              <a href="https://share.google/gCyyZ9kDC6UfSTf8F" id="article4Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="article-card">
            <div class="card-body">
              <h3 id="article4Title">Soroti ”Serakahnomics”, Prabowo Janji Sikat Pengusaha Besar yang Seenaknya </h3>
              <p id="article4Desc">Dalam pidato kenegaraannya, Presiden Prabowo Subianto kembali menyoroti praktik serakahnomics yang disebutnya sebagai penyebab ketidakadilan dalam sistem ekonomi nasional.</p>
              <a href="https://share.google/SXjFvejcO7E8Gntdt" id="article4Link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="article-card">
              <div class="card-body">
                <h3 id="article4Title">Koperasi Diizinkan Gandeng Swasta & BUMN buat Garap Tambang</h3>
                <p id="article4Desc">Menteri Koperasi Budi Arie Setiadi membuka peluang kerja sama bagi koperasi yang akan mengelola tambang.</p>
                <a href="https://finance.detik.com/energi/d-7810635/koperasi-diizinkan-gandeng-swasta-bumn-buat-garap-tambang" id="article4Link">Baca Selengkapnya</a>
              </div>
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

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <script src="js/custom.js"></script>

  <script>
    // Data konten dalam dua bahasa
    const content = {
      id: {
        article1Title: "17 Program Prioritas Prabowo - Gibran",
        article1Desc: "Prabowo Subianto dan Gibran Rakabuming Raka dijadwalkan untuk dilantik sebagai presiden dan wakil presiden Republik Indonesia periode 2024-2029 pada 20 Oktober 2024.",
        article1Link: "https://timesindonesia.co.id/pemerintahan/514897/17-program-prioritas-prabowo--gibran",
        article2Title: "Mengenal Delapan Misi 'Asta Cita' Pemerintahan Prabowo-Gibran",
        article2Desc: "Presiden dan Wakil Presiden terpilih, Prabowo Subianto dan Gibran Rakabuming Raka.",
        article2Link: "https://www.rri.co.id/lain-lain/1103608/mengenal-delapan-misi-asta-cita-pemerintahan-prabowo-gibran",
        article3Title: "Menkop Budi Arie Apresiasi Pengesahan RUU Minerba, Koperasi Diizinkan Kelola Tambang",
        article3Desc: "Kementerian Koperasi (Kemenkop) mengapresiasi pengesahan revisi Undang-Undang Nomor 4 Tahun 2009 tentang Mineral dan Batubara (Minerba).",
        article3Link: "https://www.tribunnews.com/bisnis/2025/02/18/menkop-budi-arie-apresiasi-pengesahan-ruu-minerba-koperasi-diizinkan-kelola-tambang",
        article4Title: "Budi Arie Sebut Koperasi Desa Merah Putih Bisa Kelola Tambang",
        article4Desc: "Presiden Prabowo Subianto berencana membentuk 70 ribu koperasi desa (Kopdes) Merah Putih untuk memperbaiki tata kelola koperasi di desa.",
        article4Link: "https://finance.detik.com/energi/d-7818029/budi-arie-sebut-koperasi-desa-merah-putih-bisa-kelola-tambang",
        article5Title: "Komisi III DPR Desak Polisi Tutup Tambang Ilegal di Sulawesi Utara",
        article5Desc: "Anggota Komisi III DPR RI Fraksi Partai Gerindra, Martin Daniel Tumbelaka, mendesak pihak kepolisian segera menutup seluruh tambang ilegal di Sulawesi Utara.",
        article5Link: "https://m.tribunnews.com/nasional/2024/12/10/komisi-iii-dpr-desak-polisi-tutup-tambang-ilegal-di-sulawesi-utara",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      },
      en: {
        article1Title: "17 Priority Programs of Prabowo - Gibran",
        article1Desc: "Prabowo Subianto and Gibran Rakabuming Raka are scheduled to be inaugurated as President and Vice President of the Republic of Indonesia for the 2024-2029 period on October 20, 2024.",
        article1Link: "https://timesindonesia.co.id/pemerintahan/514897/17-program-prioritas-prabowo--gibran",
        article2Title: "Getting to Know the Eight Missions of 'Asta Cita' in Prabowo-Gibran's Administration",
        article2Desc: "President-elect and Vice President-elect, Prabowo Subianto and Gibran Rakabuming Raka.",
        article2Link: "https://www.rri.co.id/lain-lain/1103608/mengenal-delapan-misi-asta-cita-pemerintahan-prabowo-gibran",
        article3Title: "Minister of Cooperatives Budi Arie Appreciates the Enactment of the Minerba Bill, Cooperatives Allowed to Manage Mines",
        article3Desc: "The Ministry of Cooperatives (Kemenkop) appreciates the enactment of the revision of Law Number 4 of 2009 concerning Minerals and Coal (Minerba).",
        article3Link: "https://www.tribunnews.com/bisnis/2025/02/18/menkop-budi-arie-apresiasi-pengesahan-ruu-minerba-koperasi-diizinkan-kelola-tambang",
        article4Title: "Budi Arie Says Merah Putih Village Cooperatives Can Manage Mines",
        article4Desc: "President Prabowo Subianto plans to form 70 thousand Merah Putih Village Cooperatives (Kopdes) to improve cooperative governance in villages.",
        article4Link: "https://finance.detik.com/energi/d-7818029/budi-arie-sebut-koperasi-desa-merah-putih-bisa-kelola-tambang",
        article5Title: "House Commission III Urges Police to Close Illegal Mines in North Sulawesi",
        article5Desc: "Member of House Commission III from the Gerindra Party faction, Martin Daniel Tumbelaka, urges the police to immediately close all illegal mines in North Sulawesi.",
        article5Link: "https://m.tribunnews.com/nasional/2024/12/10/komisi-iii-dpr-desak-polisi-tutup-tambang-ilegal-di-sulawesi-utara",
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga"
      }
    };

    // Fungsi untuk mengubah bahasa
    function changeLanguage(lang) {
      // Update konten artikel
      document.getElementById("article1Title").textContent = content[lang].article1Title;
      document.getElementById("article1Desc").textContent = content[lang].article1Desc;
      document.getElementById("article1Link").href = content[lang].article1Link;
      document.getElementById("article2Title").textContent = content[lang].article2Title;
      document.getElementById("article2Desc").textContent = content[lang].article2Desc;
      document.getElementById("article2Link").href = content[lang].article2Link;
      document.getElementById("article3Title").textContent = content[lang].article3Title;
      document.getElementById("article3Desc").textContent = content[lang].article3Desc;
      document.getElementById("article3Link").href = content[lang].article3Link;
      document.getElementById("article4Title").textContent = content[lang].article4Title;
      document.getElementById("article4Desc").textContent = content[lang].article4Desc;
      document.getElementById("article4Link").href = content[lang].article4Link;
      document.getElementById("article5Title").textContent = content[lang].article5Title;
      document.getElementById("article5Desc").textContent = content[lang].article5Desc;
      document.getElementById("article5Link").href = content[lang].article5Link;
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

    // Set current year in the footer
    document.getElementById('displayYear').textContent = new Date().getFullYear();
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