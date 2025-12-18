<?php
include 'anti-mallink.php';
include 'webp_loader.php'; // panggil fungsi convertImgToWebp
ob_start('convertImgToWebp'); // aktifkan output buffering
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sales Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta
      name="keywords"
      content="dealer hino, dealer hino jakarta, dealer hino jabodetabek, dealer hino jakarta barat, dealer hino jakarta timur, dealer hino jakarta utara, dealer hino jakarta selatan, dealer hino tangerang, dealer hino bekasi, dealer hino depok, dealer hino bogor, dealer hino bandung, dealer resmi hino indonesia, sales hino, promo hino, harga truk hino, jual truk hino, kredit truk hino, cicilan truk hino, hino ready stock, stok unit hino terbaru, harga hino terbaru 2025, promo kredit hino"
    />
    <meta name="author" content="Nathan Hino" />

    <title>Dealer Hino Tangerang | Harga & Promo Truk Hino Terbaru</title>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    

    <link rel="canonical" href="https://saleshinoindonesia.com/showroom" />

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/whatsapp.css" />
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/yt.css" />
    <link rel="stylesheet" href="/css/home/hero.css" />
    <link rel="stylesheet" href="/css/home/promoutama.css" />
    <link rel="stylesheet" href="/css/home/produk.css" />
    <link rel="stylesheet" href="/css/home/feature.css" />
    <link rel="stylesheet" href="/css/home/contact.css" />
    <link rel="stylesheet" href="/css/home/blog.css" />

    <!-- JS -->
    <script src="js/script.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Sales Hino Indonesia | Harga & Promo Truk Hino Resmi" />
    <meta property="og:description" content="Sales Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta property="og:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />
    <meta property="og:url" content="https://saleshinoindonesia.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Indonesia" />
    <meta property="og:locale" content="id_ID" />
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Sales Hino Indonesia | Harga & Promo Truk Hino Resmi" />
    <meta name="twitter:description" content="Sales Hino Indonesia Resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta name="twitter:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />
    <meta name="twitter:site" content="@SalesHinoIndonesia" />
    
    <!-- SEO Extra -->
    <meta name="author" content="Sales Hino Indonesia" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#006A31" />


    <!-- Schema JSON -->
     <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@graph": [

          {
            "@type": "WebSite",
            "@id": "https://saleshinoindonesia.com/#website",
            "url": "https://saleshinoindonesia.com/showroom",
            "name": "Sales Hino Indonesia",
            "description": "Dealer resmi Hino di Tangerang, menyediakan harga truk Hino terbaru 2025, promo menarik, simulasi kredit, dan layanan profesional untuk seluruh Indonesia.",
            "inLanguage": "id-ID",
            "publisher": {
              "@id": "https://saleshinoindonesia.com/#organization"
            },
            "potentialAction": {
              "@type": "SearchAction",
              "target": "https://saleshinoindonesia.com/?s={search_term_string}",
              "query-input": "required name=search_term_string"
            }
          },

          {
            "@type": "WebPage",
            "@id": "https://saleshinoindonesia.com/#webpage",
            "url": "https://saleshinoindonesia.com/showroom",
            "name": "Sales Hino Indonesia | Harga & Promo Truk Hino Tangerang",
            "description": "Sales Hino Indonesia – Dealer resmi Hino di Tangerang. Temukan harga truk Hino terbaru, promo menarik, spesifikasi lengkap Dutro, Ranger & Bus, serta panduan kredit dan cicilan ringan.",
            "inLanguage": "id-ID",
            "isPartOf": {
              "@id": "https://saleshinoindonesia.com/#website"
            },
            "breadcrumb": {
              "@id": "https://saleshinoindonesia.com/#breadcrumb"
            },
            "mainEntity": {
              "@type": "ItemList",
              "name": "Produk Unggulan Hino",
              "itemListOrder": "https://schema.org/ItemListOrderAscending",
              "numberOfItems": 3,
              "itemListElement": [
                {
                  "@type": "ListItem",
                  "position": 1,
                  "url": "https://saleshinoindonesia.com/hino300",
                  "name": "Hino 300 Series (Dutro)"
                },
                {
                  "@type": "ListItem",
                  "position": 2,
                  "url": "https://saleshinoindonesia.com/hino500",
                  "name": "Hino 500 Series (Ranger)"
                },
                {
                  "@type": "ListItem",
                  "position": 3,
                  "url": "https://saleshinoindonesia.com/hinobus",
                  "name": "Hino Bus Series"
                }
              ]
            }
          },

          {
            "@type": "BreadcrumbList",
            "@id": "https://saleshinoindonesia.com/#breadcrumb",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://saleshinoindonesia.com/"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "Tentang Kami",
                "item": "https://saleshinoindonesia.com/showroom"
              },
              {
                "@type": "ListItem",
                "position": 3,
                "name": "Simulasi Kredit",
                "item": "https://saleshinoindonesia.com/simulasi"
              },
              {
                "@type": "ListItem",
                "position": 4,
                "name": "Contact",
                "item": "https://saleshinoindonesia.com/contact"
              },
              {
                "@type": "ListItem",
                "position": 5,
                "name": "Blog Dan Artikel",
                "item": "https://saleshinoindonesia.com/artikel"
              }
            ]
          },

          {
            "@type": "Organization",
            "@id": "https://saleshinoindonesia.com/#organization",
            "name": "Sales Hino Indonesia",
            "url": "https://saleshinoindonesia.com/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://saleshinoindonesia.com/images/logo3.webp",
              "width": 600,
              "height": 60
            },
            "sameAs": [
              "https://www.facebook.com/profile.php?id=61573843992250",
              "https://www.instagram.com/saleshinojabodetabek",
              "https://www.tiktok.com/@saleshinoindonesia",
              "https://www.youtube.com/@dealerhinojakarta"
            ],
            "contactPoint": [
              {
                "@type": "ContactPoint",
                "telephone": "+62-859-7528-7684",
                "contactType": "sales",
                "areaServed": "ID",
                "availableLanguage": "id"
              }
            ]
          },

          {
            "@type": "ImageObject",
            "@id": "https://saleshinoindonesia.com/#mainimage",
            "url": "https://saleshinoindonesia.com/images/promohino1.webp",
            "width": 1200,
            "height": 630,
            "caption": "Sales Hino Indonesia - Dealer Resmi Hino Tangerang"
          }
        ]
      }
      </script>
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container header-content navbar">
        <div class="header-title">
          <a href="https://saleshinoindonesia.com">
            <img src="images/logo3.webp" alt="Logo Hino" loading="lazy" style="height: 60px" />
          </a>
        </div>
        <div class="hamburger-menu">&#9776;</div>
        <nav class="nav links">
          <a href="https://saleshinoindonesia.com/">Home</a>
          <a href="https://saleshinoindonesia.com/showroom">Tentang Kami</a>
          <div class="dropdown">
            <span class="dropdown-toggle">Produk</span>
            <div class="dropdown-menu">
              <a href="/hino300">Hino 300 Series</a>
              <a href="/hino500">Hino 500 Series</a>
              <a href="/hinobus">Hino Bus Series</a>
            </div>
          </div>
          <a href="https://saleshinoindonesia.com/simulasi">Simulasi Kredit</a>
          <a href="https://saleshinoindonesia.com/contact">Contact</a>
          <a href="https://saleshinoindonesia.com/artikel">Blog & Artikel</a>
        </nav>
      </div>
    </header>

    <!-- Hero -->
    <section class="hero">
      <div class="slider">
        <img src="images/Euro 4 Hino 300.webp" class="slide active" alt="Hino 300 Series" loading="lazy"/>
        <img src="images/Euro 4 Hino 500.webp" class="slide" alt="Hino 500 Series" loading="lazy"/>
        <img src="images/Euro 4 Hino Bus.webp" class="slide" alt="Hino Bus Series" loading="lazy"/>
      </div>
      <div class="container">
        <h1>Sales Hino No.1 Dengan Layanan Profesional & Cepat</h1>
        <p>Profesional, cepat, dan siap memberikan solusi terbaik untuk kebutuhan truk bisnis Anda. Layanan responsif, proses mudah, dan harga kompetitif!</p>
        <div class="hero-buttons">
          <a 
              href="https://wa.me/+6285975287684?text=Halo%20Saya%20Dapat%20Nomor%20Anda%20Dari%20Google" 
              class="btn btn-contact" 
              target="_blank" 
              rel="noopener noreferrer"
            >
              Hubungi Nathan Sekarang
            </a>
        </div>
      </div>
    </section>

    <main>
      <!-- About Company -->
      <section class="about-company">
        <div class="container">
          <div class="about-content">
            <div class="text">
              <h2>Sales Hino Indonesia</h2>
              <h3>Sales Hino Jakarta – Resmi & Terpercaya</h3>
              <div class="divider"></div>
              <p>
              Nathan, Sales Hino Indonesia yang berpengalaman dan profesional, siap menjadi mitra terbaik Anda dalam memenuhi kebutuhan kendaraan niaga. Dengan pemahaman mendalam tentang produk Hino serta solusi pembiayaan yang fleksibel, Nathan selalu memberikan pelayanan cepat, ramah, dan tepat sasaran untuk setiap jenis usaha.
              </p>
              <p>
              Komitmen Nathan adalah memberikan lebih dari sekadar penjualan. Ia hadir untuk membangun hubungan jangka panjang dengan pelanggan melalui layanan after-sales yang responsif, konsultasi kebutuhan armada yang akurat, serta penawaran harga terbaik. Percayakan kebutuhan truk Hino Anda kepada Nathan, dan rasakan pengalaman membeli yang aman, nyaman, dan menguntungkan.
              </p>
              <div class="contact-buttons">
                <a href="https://wa.me/6285975287684" class="btn whatsapp-btn"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                <a href="mailto:saleshinojabodetabek@gmail.com" class="btn email-btn"><i class="fas fa-envelope"></i> Gmail</a>
              </div>
            </div>
            <div class="image-gallery">
              <img src="images/promohino.webp" alt="Promo Hino" />
            </div>
            </div>
          </div>
        </section>
    
      <!-- Kontak -->
      <section id="contact" class="contact fade-element">
        <h2>Butuh Bantuan atau Info Harga?</h2>
        <p>Hubungi Nathan langsung via WhatsApp. Nathan siap membantu Anda memilih truk terbaik.</p>
        <a href="https://wa.me/6285975287684" class="whatsapp-link" target="_blank" rel="noopener noreferrer">Chat WhatsApp Sekarang</a>
      </section>
    </main>

    <!-- WhatsApp Floating Widget -->
    <div id="wa-widget-container">

      <!-- Floating Button -->
      <div id="wa-floating-btn">
        <img src="https://saleshinoindonesia.com/images/wa.png" alt="wa" />
        <span>WhatsApp</span>
      </div>

      <!-- Chat Box -->
      <div id="wa-chatbox">
        <div class="wa-header">
          <img 
              src="https://saleshinoindonesia.com/images/NT.jpeg" 
              class="wa-avatar" 
              alt="Sales Hino Indonesia"
            />
          <div>
            <h4>Nathan Hino</h4>
            <p>Online <span class="wa-dot"></span></p>
          </div>
          <div class="wa-close" onclick="toggleWA()">✕</div>
        </div>

        <div class="wa-body">
          <div class="wa-message">
            <p>Halo 👋</p>
            <p>Saya siap membantu untuk info produk Hino.<br>
            Silakan tanya apa saja 😊</p>
          </div>
        </div>
        <a
          href="https://wa.me/6285975287684?text=Halo%20kak%20Nathan.%20Saya%20mau%20bertanya%20tentang%20produk%20Hino."
          class="wa-button"
          target="_blank"
          rel="noopener noreferrer"
        >
          Chat on WhatsApp
        </a>
      </div>
    </div>

    <script>
      const waBox = document.getElementById("wa-chatbox");
      const waBtn = document.getElementById("wa-floating-btn");

      waBtn.onclick = toggleWA;

      function toggleWA() {
        waBox.classList.toggle("show");
      }
    </script>


        <script>
          // Toggle open/close
          document.getElementById("wa-button").onclick = function () {
            document.getElementById("wa-box").classList.toggle("show");
          };
        </script>


    <?php include 'footer.php'; ?>

    <!-- Load Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>feather.replace()</script>
  </body>
</html>
<?php ob_end_flush(); ?>