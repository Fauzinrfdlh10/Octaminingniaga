<!--
  File ini telah disesuaikan dengan index.html, animasi dan jarak antar section sudah dioptimalkan.
  Semua struktur, style, dan script mengikuti standar index.html.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>Koperasi Produsen Energi, Pertambangan dan Perdagangan</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      line-height: 1.5;
      color: #333;
      margin: 0;
      padding: 0;
    }
    h1, h2, h3, h4, h5, h6 {
      margin: 0 0 15px 0;
      font-weight: 700;
      line-height: 1.2;
    }
    h1 { font-size: 24px; }
    h2 { font-size: 20px; }
    h3 { font-size: 18px; }
    h4 { font-size: 16px; }
    h5 { font-size: 14px; }
    h6 { font-size: 12px; }
    p {
      margin: 0 0 10px 0;
      font-size: 14px;
      text-align: justify;
      text-justify: inter-word;
    }
    ol, ul {
      margin: 0 0 10px 0;
      padding-left: 20px;
    }
    li {
      margin-bottom: 8px;
      font-size: 14px;
    }
    .header_bottom {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background: #333;
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
      background-color: #555;
    }
    .dropdown-menu {
      background-color: #444;
      border: none;
      border-radius: 0 0 5px 5px;
    }
    .dropdown-item {
      color: white !important;
      padding: 10px 20px;
      transition: all 0.2s;
    }
    .dropdown-item:hover {
      background-color: #555;
    }
    .navbar-toggler {
      border-color: rgba(255, 255, 255, 0.5);
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
    @media (max-width: 992px) {
      .navbar-collapse {
        background-color: #333;
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
    .text-center { text-align: center; }
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .slide-up {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .slide-up.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .section {
      margin: 18px 0;
      padding: 24px 0;
    }
    .section:nth-child(odd) { background-color: #f8f9fa; }
    .section:nth-child(even) { background-color: #ffffff; }
    .justify-text { text-align: justify; text-justify: inter-word; }
    .center-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .heading_container h2 { margin-bottom: 15px; }
    .heading_container h4 { margin-top: 15px; }
    ol { padding-left: 20px; }
    ol li { margin-bottom: 8px; }
    .vision-mission-section {
      padding: 32px 0 10px 0;
      background-color: #f8f9fa;
      margin-bottom: 0;
    }
    .section-title {
      font-size: 28px;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 15px;
      position: relative;
      text-transform: uppercase;
      margin-top: 70px;
    }
    .title-divider {
      width: 60px;
      height: 3px;
      background: linear-gradient(to right, #3498db, #2ecc71);
      margin: 0 auto 25px;
      border-radius: 3px;
    }
    .vision-card, .mission-card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      background-color: white;
      height: 100%;
      margin-bottom: 10px;
    }
    .vision-card:hover, .mission-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .vision-card { border-top: 4px solid #3498db; }
    .mission-card { border-top: 4px solid #2ecc71; }
    .card-title {
      font-size: 20px;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 15px;
    }
    .divider-short {
      width: 40px;
      height: 2px;
      background: #3498db;
      margin-bottom: 15px;
    }
    .mission-card .divider-short { background: #2ecc71; }
    .card-text {
      font-size: 15px;
      line-height: 1.7;
      color: #555;
      word-wrap: break-word;
    }
    .mission-list { padding-left: 18px; }
    .mission-list li {
      font-size: 14px;
      line-height: 1.7;
      color: #555;
      margin-bottom: 10px;
      position: relative;
      word-wrap: break-word;
    }
    @media (max-width: 768px) {
      body { font-size: 14px !important; }
      h1, h2, h3, h4, h5, h6 { font-size: 1.2em; }
      p { font-size: 14px; }
      ol, ul { padding-left: 15px; }
      .navbar-nav .nav-link { margin: 5px 0; font-size: 14px; }
      .navbar-brand img { height: 40px; }
      .section { margin: 12px 0; padding: 16px 8px !important; }
      .heading_container h2 { font-size: 1.2em; }
      .heading_container h4 { font-size: 1em; }
      .vision-mission-section { padding: 18px 8px 6px 8px; }
      .section-title { font-size: 24px; margin-bottom: 10px; }
      .title-divider { width: 50px; margin-bottom: 20px; }
      .vision-card, .mission-card { margin-bottom: 8px; }
      .card-title { font-size: 18px; }
      .card-text, .mission-list li { font-size: 14px; }
      .mission-list li { margin-bottom: 8px; }
      .divider-short { margin-bottom: 12px; }
    }
    @media (max-width: 576px) {
      .section-title { font-size: 22px; }
      .card-title { font-size: 17px; }
      .card-text, .mission-list li { font-size: 13px; line-height: 1.6; }
      .mission-list { padding-left: 15px; }
      .mission-list li:before { left: -15px; top: 7px; }
    }
    .footer_section {
      background-color: #333;
      color: #fff;
      padding: 15px 0;
      text-align: center;
    }
    .footer_section p { margin: 0; font-size: 12px; }
    @media (max-width: 768px) {
      .footer_section p { font-size: 10px; }
    }
    .footer_section p { text-align: center; }
    .nav-item.dropdown .dropdown-menu {
      background-color: rgba(0, 0, 0, 0.7);
      border: none;
    }
    .nav-item.dropdown .dropdown-item {
      color: #fff !important;
      font-weight: 600;
      font-size: 14px;
    }
    .nav-item.dropdown .dropdown-item:hover {
      background-color: #007bff;
      color: #fff !important;
    }
    @media (max-width: 768px) {
      .nav-item.dropdown .dropdown-menu { background-color: #333; }
    }
    .legalitas-container { text-align: left; }
  </style>
</head>
<body>
  <audio id="background-music" autoplay loop>
    <source src="images/WhatsApp Audio 2025-03-22 at 01.08.14.mpeg" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>
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
  <div class="section vision-mission-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="heading_container text-center mb-4">
            <h2 id="visiMisiTitle" class="section-title">VISI & MISI</h2>
            <div class="title-divider"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-md-0">
          <div class="vision-card card h-100">
            <div class="card-body">
              <h3 class="card-title">Visi</h3>
              <div class="divider-short"></div>
              <p id="visiMisiDescription" class="card-text">
                Menjadikan koperasi Integrated Coorporation, serta mendukung unit-unit usaha yang produktif, berintegritas dan berkelanjutan dengan sumber daya manusia profesional, berkualitas, dan mampu bersaing secara global.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="mission-card card h-100">
            <div class="card-body">
              <h3 class="card-title">Misi</h3>
              <div class="divider-short"></div>
              <ol id="visiMisiList" class="mission-list">
                <li>Memberikan kepuasan kepada Penambang Rakyat, Wirausaha mikro kecil, UMKM, petani, nelayan, serta masyarakat dengan pelayanan berkualitas unggul.</li>
                <li>Menjalankan sistem koperasi pertambangan rakyat yang ramah lingkungan dengan menjaga ekosistem pasca tambang (reboisasi) serta menegakkan etika bisnis.</li>
                <li>Berpartisipasi dalam membangun negara dengan menumbuh kembangkan jiwa kewirausahaan dan kemitraan koperasi terintegrasi terpadu.</li>
                <li>Membentuk jiwa kemandirian melalui edukasi dan kemitraan dalam membangun koperasi bersama serta meningkatkan pendapatan anggota.</li>
                <li>Membangun organisasi koperasi yang terpercaya, sehat, terus bertumbuh, dan bermanfaat bagi anggota serta masyarakat.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container slide-up">
      <div class="heading_container">
        <h2 id="legalitasTitle" style="text-align: left;">Legalitas Koperasi Produsen Patuari Mining Niaga.</h2>
      </div>
      <div class="legalitas-container">
        <ul id="legalitasList">
          <li id="aktaPendirianDescription">Akta Pendirian Koperasi Produsen Octa Mining Niaga Kamis, 28 Agustus 2025. Di Hadapan XXXXX, Sarjana Hukum, Magister Kenotariatan Provinsi Gorontalo Yang Berdasarkan Surat Keputusan Menteri Negara Koperasi Dan Usaha Kecil Dan Menengah Nomor 263/KEP/ M.KUKM.2/VII/2012.</li>
          <li id="keputusanMenteriDescription">KEPUTUSAN MENTERI HUKUM REPUBLIK INDONESIA NOMOR AHU-XXXXX.AH.XX.XX. TAHUN 2025 TENTANG PENGESAHAN PENDIRIAN BADAN HUKUM KOPERASI PRODUSEN OCTA MINING NIAGA.</li>
          <li id="nomorIndukDescription">Nomor Induk Koperasi ( NIK ) : XXXXXXXX </li>
          <li id="nomorIndukBerusahaDescription">Nomor Induk Berusaha ( NIB ) : XXXXXXXX </li>
          <li id="npwpDescription">NPWP Koperasi : XXXXXXXX.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container slide-up center-content">
      <div class="heading_container">
        <h2 id="riwayatTitle">Riwayat Koperasi</h2>
      </div>
      <p id="riwayatDescription1" class="justify-text">Perjalanan awal tentang riwayat singkat kelahiran Koperasi Octa Mining Niaga.</p>
      <p id="riwayatDescription2" class="justify-text">Octa Mining Niaga merupakan koperasi yang bergerak dalam unit usaha pertambangan, pengolahan bijih logam emas dan perak, energi terbarukan,  treatment limbah, serta jasa perdagangan. Koperasi ini didirikan pada Kamis, 28 Agustus 2025.</p>
      <p id="riwayatDescription3" class="justify-text">Koperasi Octa Mining Niaga mengolah bijih logam emas dengan metode teknologi  Environmental-Friendly Gold extraction.</p>
    </div>
  </div>
  <div class="section">
    <div class="container fade-in">
      <div class="heading_container">
        <h2 id="etikaTitle" style="text-align: left;">Menegakkan Etika Bisnis Yang Tinggi dan Pertanggung Jawaban</h2>
      </div>
      <div class="prinsip-etika">
        <p id="etikaPrinsip" style="text-align: left;">Prinsip Etika Bisnis</p>
        <p id="etikaDescription" style="text-align: left;">Menjunjung tinggi integritas, moralitas, dan tanggung jawab dalam semua aspek bisnis dalam wirausaha.</p>
      </div>
      <div class="sistem-etika">
        <h4 id="sistemEtikaTitle" style="text-align: left;">Sistem Menegakkan Etika Bisnis:</h4>
        <ol id="sistemEtikaList" style="text-align: left;">
          <li>Membuat kode etik yang jelas dan spesifik untuk memandu perilaku bisnis.</li>
          <li>Melatih para anggota koperasi tentang etika bisnis dan pentingnya menjunjung tinggi integritas, moralitas, dan tanggung jawab.</li>
          <li>Mengawasi dan mengontrol operasional bisnis untuk memastikan bahwa etika bisnis dijunjung tinggi.</li>
          <li>Menghargai whistleblower yang melaporkan pelanggaran etika bisnis.</li>
          <li>Mengambil tindakan yang tegas terhadap pelanggaran etika bisnis.</li>
        </ol>
      </div>
      <div class="sistem-etika">
        <h4 id="manfaatEtikaTitle" style="text-align: left;">Manfaat Menegakkan Etika Bisnis:</h4>
        <ol id="manfaatEtikaList" style="text-align: left;">
          <li>Membangun kepercayaan dengan stakeholder, pemangku kepentingan, pelanggan mitra koperasi, anggota koperasi, dan masyarakat umumnya.</li>
          <li>Mengurangi risiko pelanggaran hukum dan kerugian finansial.</li>
          <li>Meningkatkan produktivitas anggota koperasi dan memperbaiki kualitas kinerja anggota koperasi dan mitra koperasi.</li>
          <li>Mendorong kami untuk mengambil peran untuk berkontribusi ke Negara dan masyarakat.</li>
          <li>Berpegang pada tanggung jawab adalah wilayah tertinggi dalam pemikiran. Memiliki rasa bertanggung jawab adalah sifat terbaik; karena memberi keberanian, energia, dan kebijaksanaan.</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container slide-up center-content">
      <div class="heading_container">
        <h2 id="domisiliTitle">Domisili Koperasi</h2>
      </div>
      <ul id="domisiliList" class="list-unstyled">
        <li><i class="fa fa-map-marker" aria-hidden="true"></i> XXXXXXXX</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i> Tlp XXXXXXXX</li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i> Email : octaminingniaga@gmail.com</li>
      </ul>
    </div>
  </div>
  <footer class="footer_section">
    <div class="container">
      <div class="text-center">
        <p id="footerText">
          &copy; <span id="displayYear"></span> All Rights Reserved By Octa Mining Niaga
        </p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const content = {
      id: {
        visiMisiTitle: "VISI & MISI",
        visiMisiDescription: "Menjadikan koperasi Integrated Coorporation, serta mendukung unit-unit usaha yang produktif, berintegritas dan berkelanjutan dengan sumber daya manusia profesional, berkualitas, dan mampu bersaing secara global.",
        visiMisiList: [
          "Memberikan kepuasan kepada Penambang Rakyat, Wirausaha mikro kecil, UMKM, petani, nelayan, serta masyarakat dengan pelayanan berkualitas unggul.",
          "Menjalankan sistem koperasi pertambangan rakyat yang ramah lingkungan dengan menjaga ekosistem pasca tambang (reboisasi) serta menegakkan etika bisnis.",
          "Berpartisipasi dalam membangun negara dengan menumbuh kembangkan jiwa kewirausahaan dan kemitraan koperasi terintegrasi terpadu.",
          "Membentuk jiwa kemandirian melalui edukasi dan kemitraan dalam membangun koperasi bersama serta meningkatkan pendapatan anggota.",
          "Membangun organisasi koperasi yang terpercaya, sehat, terus bertumbuh, dan bermanfaat bagi anggota serta masyarakat."
        ],
        riwayatTitle: "Riwayat Koperasi",
        riwayatDescription1: "Perjalanan awal tentang riwayat singkat kelahiran Koperasi Octa Mining Niaga.",
        riwayatDescription2: "Octa Mining Niaga merupakan koperasi yang bergerak dalam unit usaha pertambangan, pengolahan bijih logam emas dan perak, energi terbarukan, treatment limbah, serta jasa perdagangan. Koperasi ini didirikan pada Kamis, 28 Agustus 2025.",
        riwayatDescription3: "Koperasi Octa Mining Niaga mengolah bijih logam emas dengan metode teknologi Environmental-Friendly Gold extraction.",
        etikaTitle: "Menegakkan Etika Bisnis Yang Tinggi dan Pertanggung Jawaban",
        etikaPrinsip: "Prinsip Etika Bisnis",
        etikaDescription: "Menjunjung tinggi integritas, moralitas, dan tanggung jawab dalam semua aspek bisnis dalam wirausaha.",
        sistemEtikaTitle: "Sistem Menegakkan Etika Bisnis:",
        sistemEtikaList: [
          "Membuat kode etik yang jelas dan spesifik untuk memandu perilaku bisnis.",
          "Melatih para anggota koperasi tentang etika bisnis dan pentingnya menjunjung tinggi integritas, moralitas, dan tanggung jawab.",
          "Mengawasi dan mengontrol operasional bisnis untuk memastikan bahwa etika bisnis dijunjung tinggi.",
          "Menghargai whistleblower yang melaporkan pelanggaran etika bisnis.",
          "Mengambil tindakan yang tegas terhadap pelanggaran etika bisnis."
        ],
        manfaatEtikaTitle: "Manfaat Menegakkan Etika Bisnis:",
        manfaatEtikaList: [
          "Membangun kepercayaan dengan stakeholder, pemangku kepentingan, pelanggan mitra koperasi, anggota koperasi, dan masyarakat umumnya.",
          "Mengurangi risiko pelanggaran hukum dan kerugian finansial.",
          "Meningkatkan produktivitas anggota koperasi dan memperbaiki kualitas kinerja anggota koperasi dan mitra koperasi.",
          "Mendorong kami untuk mengambil peran untuk berkontribusi ke Negara dan masyarakat.",
          "Berpegang pada tanggung jawab adalah wilayah tertinggi dalam pemikiran. Memiliki rasa bertanggung jawab adalah sifat terbaik; karena memberi keberanian, energi, dan kebijaksanaan."
        ],
        domisiliTitle: "Domisili Koperasi",
        domisiliList: [
          "<i class='fa fa-map-marker' aria-hidden='true'></i> XXXXXXXX",
          "<i class='fa fa-phone' aria-hidden='true'></i> Tlp XXXXXXXX",
          "<i class='fa fa-envelope' aria-hidden='true'></i> Email : octaminingniaga@gmail.com"
        ],
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga",
        legalitasTitle: "Legalitas Koperasi Produsen Octa Mining Niaga.",
        legalitasList: [
          "Akta Pendirian Koperasi Produsen Octa Mining Niaga Kamis, 28 Agustus 2025. Di Hadapan XXXXX, Sarjana Hukum, Magister Kenotariatan Provinsi Gorontalo Yang Berdasarkan Surat Keputusan Menteri Negara Koperasi Dan Usaha Kecil Dan Menengah Nomor 263/KEP/ M.KUKM.2/VII/2012.",
          "KEPUTUSAN MENTERI HUKUM REPUBLIK INDONESIA NOMOR AHU-XXXXX.AH.XX.XX. TAHUN 2025 TENTANG PENGESAHAN PENDIRIAN BADAN HUKUM KOPERASI PRODUSEN OCTA MINING NIAGA.",
          "Nomor Induk Koperasi ( NIK ) : XXXXXXXX",
          "Nomor Induk Berusaha ( NIB ) : XXXXXXXX",
          "NPWP Koperasi : XXXXXXXX.",
        ],
      },
      en: {
        visiMisiTitle: "VISION & MISSION",
        visiMisiDescription: "To make the cooperative an Integrated Corporation, and support productive, integrated and sustainable business units with professional, qualified human resources capable of competing globally.",
        visiMisiList: [
          "Providing satisfaction to People's Miners, Small Micro Entrepreneurs, MSMEs, farmers, fishermen, and communities with superior quality services.",
          "Implementing an environmentally friendly people's mining cooperative system by maintaining post-mining ecosystems (reforestation) and upholding business ethics.",
          "Participating in national development by fostering entrepreneurial spirit and integrated cooperative partnerships.",
          "Building independence through education and partnerships in developing cooperatives together and increasing member income.",
          "Building a trusted, healthy, continuously growing cooperative organization that benefits members and society."
        ],
        riwayatTitle: "Cooperative History",
        riwayatDescription1: "The early journey about the brief history of Octa Mining Niaga Cooperative's establishment.",
        riwayatDescription2: "Octa Mining Niaga is a cooperative engaged in mining business units, gold and silver ore processing, renewable energy, waste treatment, and trading services. This cooperative was established on Thursday, August 28, 2025.",
        riwayatDescription3: "Octa Mining Niaga Cooperative processes gold ore using Environmental-Friendly Gold extraction technology method.",
        etikaTitle: "Upholding High Business Ethics and Responsibility",
        etikaPrinsip: "Business Ethics Principles",
        etikaDescription: "Upholding integrity, morality, and responsibility in all aspects of business in entrepreneurship.",
        sistemEtikaTitle: "System for Upholding Business Ethics:",
        sistemEtikaList: [
          "Creating a clear and specific code of ethics to guide business behavior.",
          "Training cooperative members about business ethics and the importance of upholding integrity, morality, and responsibility.",
          "Monitoring and controlling business operations to ensure that business ethics are upheld.",
          "Appreciating whistleblowers who report ethical violations.",
          "Taking firm action against ethical violations."
        ],
        manfaatEtikaTitle: "Benefits of Upholding Business Ethics:",
        manfaatEtikaList: [
          "Building trust with stakeholders, customers, cooperative partners, members, and the general public.",
          "Reducing the risk of legal violations and financial losses.",
          "Increasing the productivity of cooperative members and improving the performance quality of members and partners.",
          "Encouraging us to take a role in contributing to the nation and society.",
          "Holding onto responsibility is the highest realm of thought. Having a sense of responsibility is the best trait; it gives courage, energy, and wisdom."
        ],
        domisiliTitle: "Cooperative Domicile",
        domisiliList: [
          "<i class='fa fa-map-marker' aria-hidden='true'></i> XXXXXXXX",
          "<i class='fa fa-phone' aria-hidden='true'></i> Phone XXXXXXXX",
          "<i class='fa fa-envelope' aria-hidden='true'></i> Email : octaminingniaga@gmail.com"
        ],
        footerText: "&copy; <span id='displayYear'></span> All Rights Reserved By Octa Mining Niaga",
        legalitasTitle: "Legality of Octa Mining Niaga Producer Cooperative.",
        legalitasList: [
          "Deed of Establishment of Octa Mining Niaga Producer Cooperative Thursday, August 28, 2025. Before XXXXX, Bachelor of Law, Master of Notary of Gorontalo Province Based on the Decree of the State Minister for Cooperatives and Small and Medium Enterprises Number 263/KEP/M.KUKM.2/VII/2012.",
          "DECREE OF THE MINISTER OF LAW OF THE REPUBLIC OF INDONESIA NUMBER AHU-XXXXX.AH.XX.XX. YEAR 2025 CONCERNING THE RATIFICATION OF THE ESTABLISHMENT OF OCTA MINING NIAGA PRODUCER COOPERATIVE LEGAL ENTITY.",
          "Cooperative Registration Number (NIK): XXXXXXXX",
          "Business Registration Number (NIB): XXXXXXXX",
          "Cooperative Tax ID Number (NPWP): XXXXXXXX.",
        ],
      }
    };
    function changeLanguage(lang) {
      document.getElementById("visiMisiTitle").textContent = content[lang].visiMisiTitle;
      document.getElementById("visiMisiDescription").textContent = content[lang].visiMisiDescription;
      document.getElementById("visiMisiList").innerHTML = content[lang].visiMisiList.map(item => `<li>${item}</li>`).join("");
      document.getElementById("riwayatTitle").textContent = content[lang].riwayatTitle;
      document.getElementById("riwayatDescription1").textContent = content[lang].riwayatDescription1;
      document.getElementById("riwayatDescription2").textContent = content[lang].riwayatDescription2;
      document.getElementById("riwayatDescription3").textContent = content[lang].riwayatDescription3;
      document.getElementById("etikaTitle").textContent = content[lang].etikaTitle;
      document.getElementById("etikaPrinsip").textContent = content[lang].etikaPrinsip;
      document.getElementById("etikaDescription").textContent = content[lang].etikaDescription;
      document.getElementById("sistemEtikaTitle").textContent = content[lang].sistemEtikaTitle;
      document.getElementById("sistemEtikaList").innerHTML = content[lang].sistemEtikaList.map(item => `<li>${item}</li>`).join("");
      document.getElementById("manfaatEtikaTitle").textContent = content[lang].manfaatEtikaTitle;
      document.getElementById("manfaatEtikaList").innerHTML = content[lang].manfaatEtikaList.map(item => `<li>${item}</li>`).join("");
      document.getElementById("domisiliTitle").textContent = content[lang].domisiliTitle;
      document.getElementById("domisiliList").innerHTML = content[lang].domisiliList.join("");
      document.getElementById("footerText").innerHTML = content[lang].footerText;
      document.getElementById("legalitasTitle").textContent = content[lang].legalitasTitle;
      document.getElementById("legalitasList").innerHTML = content[lang].legalitasList.map(item => `<li>${item}</li>`).join("");
      localStorage.setItem("language", lang);
    }
    document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
      item.addEventListener('click', function (e) {
        e.preventDefault();
        const lang = this.getAttribute('data-lang');
        changeLanguage(lang);
      });
    });
    document.addEventListener("DOMContentLoaded", function () {
      const savedLang = localStorage.getItem("language") || "id";
      changeLanguage(savedLang);
      document.getElementById("displayYear").textContent = new Date().getFullYear();
    });
    document.addEventListener('DOMContentLoaded', () => {
      const fadeElements = document.querySelectorAll('.fade-in');
      const slideElements = document.querySelectorAll('.slide-up');
      const checkVisibility = () => {
        fadeElements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementBottom = element.getBoundingClientRect().bottom;
          const isVisible = (elementTop < window.innerHeight) && (elementBottom >= 0);
          if (isVisible) { element.classList.add('visible'); }
        });
        slideElements.forEach(element => {
          const elementTop = element.getBoundingClientRect().top;
          const elementBottom = element.getBoundingClientRect().bottom;
          const isVisible = (elementTop < window.innerHeight) && (elementBottom >= 0);
          if (isVisible) { element.classList.add('visible'); }
        });
      };
      window.addEventListener('scroll', checkVisibility);
      window.addEventListener('resize', checkVisibility);
      checkVisibility();
    });
  </script>
  <script>
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