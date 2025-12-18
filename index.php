<?php
include 'anti-mallink.php';
include 'webp_loader.php'; // panggil fungsi convertImgToWebp
ob_start('convertImgToWebp'); // aktifkan output buffering
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-P7TN9DJW');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dealer Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta
      name="keywords"
      content="dealer hino, dealer hino jakarta, dealer hino jabodetabek, dealer hino jakarta barat, dealer hino jakarta timur, dealer hino jakarta utara, dealer hino jakarta selatan, dealer hino tangerang, dealer hino bekasi, dealer hino depok, dealer hino bogor, dealer hino bandung, dealer resmi hino indonesia, sales hino, promo hino, harga truk hino, jual truk hino, kredit truk hino, cicilan truk hino, hino ready stock, stok unit hino terbaru, harga hino terbaru 2025, promo kredit hino"
    />
    <meta name="author" content="Nathan Hino" />

    <title>Dealer Hino Indonesia | Harga & Promo Truk Hino Resmi</title>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    

    <link rel="canonical" href="https://saleshinoindonesia.com/" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17738682772">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17738682772');
    </script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/whatsapp.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/home/hero.css" />
    <link rel="stylesheet" href="css/home/promoutama.css" />
    <link rel="stylesheet" href="css/home/produk.css" />
    <link rel="stylesheet" href="css/home/feature.css" />
    <link rel="stylesheet" href="css/home/contact.css" />
    <link rel="stylesheet" href="css/home/blog.css" />

    <!-- JS -->
    <script src="js/script.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Dealer Hino Indonesia | Harga & Promo Truk Hino Resmi" />
    <meta property="og:description" content="Dealer Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta property="og:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />
    <meta property="og:url" content="https://saleshinoindonesia.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Dealer Hino Indonesia" />
    <meta property="og:locale" content="id_ID" />
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dealer Hino Indonesia | Harga & Promo Truk Hino Resmi" />
    <meta name="twitter:description" content="Dealer Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek." />
    <meta name="twitter:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />
    <meta name="twitter:site" content="@SalesHinoIndonesia" />
    
    <!-- SEO Extra -->
    <meta name="author" content="Dealer Hino Indonesia" />
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#006A31" />


    <!-- Schema.org JSON-LD untuk SEO Dealer Hino -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Dealer Hino Indonesia",
      "url": "https://saleshinoindonesia.com"
    }
    </script>

    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AutoDealer",
      "@id": "https://saleshinoindonesia.com/#dealer",
      "name": "Dealer Hino Indonesia",
      "alternateName": "Dealer Resmi Hino Jakarta",
      "url": "https://saleshinoindonesia.com/",
      "image": "https://saleshinoindonesia.com/images/promohino1.webp",
      "logo": "https://saleshinoindonesia.com/favicon_512.png",
      "description": "Dealer Hino Indonesia resmi | Cek harga truk Hino terbaru, promo menarik, DP ringan & konsultasi gratis. Melayani seluruh Indonesia & Jabodetabek.",
      "telephone": "+62-859-7528-7684",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jl. Tj. Pura.9-10, RT.2/RW.2, Pegadungan, Kec. Kalideres",
        "addressLocality": "Jakarta Barat",
        "addressRegion": "DKI Jakarta",
        "postalCode": "11830",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.1567,
        "longitude": 106.6901
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "08:00",
          "closes": "17:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61573843992250",
        "https://www.instagram.com/saleshinojabodetabek",
        "https://www.tiktok.com/@saleshinoindonesia"
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
          <a href="https://saleshinoindonesia.com/hino500">Service</a>
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

      <!-- Produk -->
      <section id="products-section" class="products-section fade-element">
        <h2 class="section-title">Produk Truk Hino Unggulan</h2>
        <div class="products">
          <div class="product">
            <img src="images/Euro 4 Hino 300.webp" alt="Hino 300 Dutro" loading="lazy"/>
            <h3><a href="https://saleshinoindonesia.com/hino300" target="_blank" rel="noopener noreferrer">Hino 300 Series (Dutro)</a></h3>
            <p>Truk ringan dan tangguh, cocok untuk usaha kecil dan menengah.</p>
          </div>
          <div class="product">
            <img src="images/Euro 4 Hino 500.webp" alt="Hino 500 Ranger" loading="lazy"/>
            <h3><a href="https://saleshinoindonesia.com/hino500" target="_blank" rel="noopener noreferrer">Hino 500 Series (Ranger)</a></h3>
            <p>Performa handal untuk pengangkutan berat dan jarak jauh.</p>
          </div>
          <div class="product">
            <img src="images/Euro 4 Hino Bus.webp" alt="Hino Bus Series" loading="lazy"/>
            <h3><a href="https://saleshinoindonesia.com/hinobus" target="_blank" rel="noopener noreferrer">Hino Bus Series</a></h3>
            <p>Solusi transportasi penumpang dengan kenyamanan terbaik.</p>
          </div>
        </div>
      </section>

      <!-- Youtube -->
       <section class="sh-video-section">
        <div class="sh-container">
          <div class="sh-video-header">
            <h2>Hino New Series 300 136 MDLR</h2>
            <p>
              Saksikan langsung informasi produk, layanan, dan keunggulan
              kendaraan niaga Hino untuk kebutuhan bisnis Anda.
            </p>
          </div>

          <div class="sh-video-wrapper">
            <iframe
              src="https://www.youtube.com/embed/IUhKBJOcVus"
              title="Video Dealer Hino Indonesia"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </section>
      
      <!-- Section: Promo Utama -->
      <section id="promo-utama" class="promo-section fade-element">
        <div class="promo-text">
          <h2>Dapatkan Harga dan Penawaran Terbaik Langsung dari Dealer Resmi Hino Indonesia</h2>
          <ul>
            <li>Ingin harga terbaik untuk semua jenis truk Hino?</li>
            <li>Bingung memilih kendaraan yang tepat untuk bisnis Anda?</li>
            <li>Butuh pelayanan cepat, ramah, dan profesional?</li>
            <li>Hubungi Nathan Hino sekarang juga dan dapatkan solusi terbaik!</li>
          </ul>
          <p>Anda berada di tempat yang tepat! Nathan Hino siap membantu Anda mendapatkan truk Hino baru dengan harga kompetitif untuk seluruh Indonesia, <strong>terutama di Jabodetabek dan Jawa Barat</strong>. Pelayanan cepat, terpercaya, dan tanpa ribet menanti Anda!</p>
          <div class="promo-buttons">
            <a href="https://wa.me/6285975287684" class="btn-primary" target="_blank" rel="noopener noreferrer">Konsultasi Pembelian</a>
          </div>
        </div>
        <img src="images/hino.webp" alt="Truk Hino Hijau" loading="lazy" class="promo-main-image"/>
      </section>
      
      <!-- Fitur -->
      <section id="features" class="features fade-element">
        <h2 class="section-title">Kenapa Pilih Hino?</h2>
        <div class="feature-list">
          <div class="feature">
            <div class="icon">🛻</div>
            <h3>Durabilitas Tinggi</h3>
            <p>Mesin dan bodi tahan lama untuk penggunaan berat sehari-hari.</p>
          </div>
          <div class="feature">
            <div class="icon">👥</div>
            <h3>Pelatihan & Konsultasi</h3>
            <p>Kami siap memberikan pelatihan dan konsultasi sesuai kebutuhan bisnis Anda.</p>
          </div>
          <div class="feature">
            <div class="icon">🔧</div>
            <h3>Servis dan Support</h3>
            <p>Jaringan servis luas dan suku cadang tersedia di seluruh Indonesia.</p>
          </div>
        </div>
      </section>

      <!-- Kontak -->
      <section id="contact" class="contact fade-element">
        <h2>Butuh Bantuan atau Info Harga?</h2>
        <p>Hubungi Nathan langsung via WhatsApp. Nathan siap membantu Anda memilih truk terbaik.</p>
        <a href="https://wa.me/6285975287684" class="whatsapp-link" target="_blank" rel="noopener noreferrer">Chat WhatsApp Sekarang</a>
      </section>

      <!-- Blog Section -->
      <section class="blog-section fade-element">
        <div class="container">
          <h2>Blog & Artikel</h2>
          <p>Dapatkan informasi terbaru seputar Truk Hino, perawatan, dan promo terbaik.</p>
          <div class="blog-grid">
            <?php
              $artikelData = json_decode(file_get_contents("https://saleshinoindonesia.com/admin/api/get_artikel.php?page=1&perPage=3"), true);
              if (isset($artikelData['data']) && is_array($artikelData['data'])) {
                $terbaru = array_slice($artikelData['data'], 0, 3);
                foreach ($terbaru as $artikel):
            ?>
              <div class="blog-card">
                <img src="<?= htmlspecialchars($artikel['gambar']) ?>" alt="<?= htmlspecialchars($artikel['judul']) ?>" loading="lazy"/>
                <div class="blog-card-content">
                  <h3>
                    <a href="/artikel/<?= urlencode($artikel['slug']) ?>">
                      <?= htmlspecialchars($artikel['judul']) ?>
                    </a>
                  </h3>
                  <p><?= htmlspecialchars(substr(strip_tags($artikel['isi']), 0, 100)) ?>...</p>
                  <a href="/artikel/<?= urlencode($artikel['slug']) ?>" class="read-more">Baca Selengkapnya</a>
                </div>
              </div>
            <?php endforeach; } else { echo "<p>Tidak ada artikel ditemukan.</p>"; } ?>
          </div>
        </div>
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