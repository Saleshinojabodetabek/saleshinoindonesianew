<?php
// Ambil data kategori dari API
$kategoriData = json_decode(file_get_contents("https://saleshinoindonesia.com/admin/api/get_kategoriartikel.php"), true);

// Ambil parameter filter
$search = $_GET['search'] ?? '';
$selectedKategori = $_GET['kategori'] ?? '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 6;

// Bangun URL API artikel
$apiUrl = "https://saleshinoindonesia.com/admin/api/get_artikel.php?page=$page&perPage=$perPage";
if ($search !== '') {
    $apiUrl .= "&search=" . urlencode($search);
}
if ($selectedKategori !== '') {
    $apiUrl .= "&kategori=" . urlencode($selectedKategori);
}

// Ambil data artikel dari API
$response = json_decode(file_get_contents($apiUrl), true);

// Pastikan data valid
$page = $response['page'] ?? 1;
$totalPages = $response['totalPages'] ?? 1;
$artikel = $response['data'] ?? [];

// Buat base URL pagination
$baseUrl = "?";
if ($search !== '') $baseUrl .= "search=" . urlencode($search) . "&";
if ($selectedKategori !== '') $baseUrl .= "kategori=" . urlencode($selectedKategori) . "&";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    if ($page > 1) {
        $description = "Halaman $page berisi kumpulan artikel terbaru seputar truk Hino, tips bisnis angkutan, harga terbaru, dan informasi lengkap untuk membantu kebutuhan usaha Anda.";
    }
    elseif (!empty($selectedKategori)) {
    
        if (strtolower($selectedKategori) == 'berita') {
            $description = "Kumpulan berita terbaru seputar dunia truk Hino, update perusahaan, teknologi, harga, dan perkembangan terbaru Hino di Indonesia.";
        }
        elseif (strtolower($selectedKategori) == 'promo') {
            $description = "Promo terbaru truk Hino: diskon, DP ringan, cicilan murah, dan penawaran khusus untuk pembelian Hino Dutro, Ranger, dan Bus.";
        }
        else {
            $description = "Artikel kategori $selectedKategori membahas berbagai informasi menarik tentang truk Hino, tips usaha, dan panduan memilih armada terbaik.";
        }
    
    }
    else {
        $description = "Kumpulan artikel, tips, harga, promo, dan berita terbaru seputar truk Hino Indonesia untuk membantu kebutuhan bisnis Anda.";
    }
    ?>
    
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="keywords" content="harga truk hino terbaru, tips memilih truk hino, perbandingan hino dutro dan ranger, review truk hino, update harga hino 2025, berita hino terbaru, artikel hino indonesia, promo hino terbaru, panduan kredit truk hino, cara memilih truk bisnis" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Nathan Hino" />
    
    <!-- Canonical FINAL FIX -->
    <?php
    $canonical = "https://saleshinoindonesia.com/artikel/";
    ?>
    <link rel="canonical" href="<?= $canonical ?>">

    <!--Title-->
    <?php
    if ($page > 1) {
        echo "<title>Artikel Hino Terbaru - Halaman $page | Sales Hino Indonesia</title>";
    } 
    elseif (!empty($selectedKategori)) {
    
        if (strtolower($selectedKategori) == 'berita') {
            echo "<title>Berita Terbaru Truk Hino | Sales Hino Indonesia</title>";
        } 
        elseif (strtolower($selectedKategori) == 'promo') {
            echo "<title>Promo Hino Terbaru | Sales Hino Indonesia</title>";
        } 
        else {
            echo "<title>Artikel Hino Kategori $selectedKategori | Sales Hino Indonesia</title>";
        }
    
    } 
    else {
        echo "<title>Blog & Artikel Hino Terbaru | Sales Hino Indonesia</title>";
    }
    ?>

    <!-- Favicon untuk semua browser modern -->
    <link rel="icon" type="image/png" sizes="512x512" href="/favicon_512.png">
    
    <!-- Favicon untuk browser lama -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Apple Touch Icon (iPhone/iPad) -->
    <link rel="apple-touch-icon" href="/favicon_512.png">
    
    <!-- Google Lighthouse Recommendation -->
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/whatsapp.css" />
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/blog/artikel.css" />
    <link rel="stylesheet" href="/css/blog/hero.css" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <!-- JS -->
    <script src="/js/script.js"></script>

    <!-- Open Graph -->
    <meta property="og:title" content="Blog & Artikel Hino | Tips, Berita & Info Truk Hino" />
    <meta property="og:description" content="Kumpulan artikel, tips truck Hino, berita terbaru, perawatan, dan panduan memilih truk terbaik untuk bisnis Anda." />
    <meta property="og:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />
    <meta property="og:url" content="https://saleshinoindonesia.com/artikel" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Sales Hino Indonesia" />


    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dealer Resmi Hino Tangerang | Harga & Promo Truk Hino Terbaru 2025" />
    <meta name="twitter:description" content="Dealer Resmi Hino Tangerang - Jual Truk Hino Dutro, Ranger, dan Bus Hino dengan harga terbaik dan promo terbaru 2025." />
    <meta name="twitter:image" content="https://saleshinoindonesia.com/images/promohino1.webp" />

    <?php
    // ===============================
    // SCHEMA JSON-LD HALAMAN ARTIKEL
    // ===============================

    $schemaItemList = [];
    $pos = 1;

    foreach ($artikel as $row) {

        if (empty($row['slug']) || empty($row['judul'])) {
            continue;
        }

        $schemaItemList[] = [
            "@type" => "ListItem",
            "position" => $pos++,
            "url" => "https://saleshinoindonesia.com/artikel/" . $row['slug'],
            "item" => [
                "@type" => "BlogPosting",
                "headline" => $row['judul'],
                "description" => substr(strip_tags($row['isi'] ?? ''), 0, 150),
                "image" => $row['gambar'] ?? "https://saleshinoindonesia.com/favicon_512.png",
                "author" => [
                    "@type" => "Organization",
                    "name" => "Sales Hino Indonesia"
                ],
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "Sales Hino Indonesia",
                    "logo" => [
                        "@type" => "ImageObject",
                        "url" => "https://saleshinoindonesia.com/favicon_512.png"
                    ]
                ],
                "mainEntityOfPage" => [
                    "@type" => "WebPage",
                    "@id" => "https://saleshinoindonesia.com/artikel/" . $row['slug']
                ],
                "datePublished" => $row['tanggal'] ?? null,
                "dateModified" => $row['tanggal'] ?? null
            ]
        ];
    }

    $schema = [
        "@context" => "https://schema.org",
        "@graph" => [

            [
                "@type" => "WebPage",
                "@id" => $canonical,
                "url" => $canonical,
                "name" => "Blog & Artikel Hino Terbaru | Sales Hino Indonesia",
                "description" => $description,
                "inLanguage" => "id-ID"
            ],

            [
                "@type" => "BreadcrumbList",
                "itemListElement" => [
                    [
                        "@type" => "ListItem",
                        "position" => 1,
                        "name" => "Home",
                        "item" => "https://saleshinoindonesia.com/"
                    ],
                    [
                        "@type" => "ListItem",
                        "position" => 2,
                        "name" => "Artikel",
                        "item" => $canonical
                    ]
                ]
            ],

            [
                "@type" => "Blog",
                "name" => "Blog Truk Hino Indonesia",
                "url" => $canonical,
                "description" => $description,
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "Sales Hino Indonesia",
                    "logo" => [
                        "@type" => "ImageObject",
                        "url" => "https://saleshinoindonesia.com/favicon_512.png"
                    ]
                ]
            ],

            [
                "@type" => "ItemList",
                "name" => "Daftar Artikel Hino",
                "numberOfItems" => count($schemaItemList),
                "itemListElement" => $schemaItemList
            ]

        ]
    ];
    ?>

    <script type="application/ld+json">
    <?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
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
    <section class="hero-blog">
        <div class="hero-blog-content">
            <div class="hero-blog-text">
                <h1>
                <?php
                if ($page > 1) {
                    echo "Artikel Hino Terbaru - Halaman $page";
                } 
                elseif (!empty($selectedKategori)) {
                    if (strtolower($selectedKategori) == 'berita') {
                        echo "Berita Terbaru Truk Hino";
                    } 
                    elseif (strtolower($selectedKategori) == 'promo') {
                        echo "Promo Hino Terbaru";
                    } 
                    else {
                        echo "Artikel Hino Kategori " . htmlspecialchars($selectedKategori);
                    }
                } 
                else {
                    echo "Blog & Artikel Truk Hino Terbaru";
                }
                ?>
                </h1>
                <p>Dapatkan informasi terbaru, tips, dan berita seputar Hino untuk mendukung bisnis Anda.</p>
                <a href="#artikel" class="btn-blog">Lihat Artikel</a>
            </div>
            <div class="hero-blog-image"></div>
        </div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-blue"></div>
    </section>

    <!-- Blog & Artikel -->
    <section class="content-section" id="artikel">
        <div class="container">

            <!-- Filter -->
            <form method="get" class="blog-filter" style="margin-bottom: 20px;">
                <input type="text" name="search" placeholder="Cari artikel..." value="<?= htmlspecialchars($search) ?>" />
                <select name="kategori" onchange="this.form.submit()">
                    <option value="">Semua Kategori</option>
                    <?php if (is_array($kategoriData)): ?>
                        <?php foreach ($kategoriData as $kat): ?>
                            <option value="<?= htmlspecialchars($kat['nama']) ?>" <?= $selectedKategori === $kat['nama'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($kat['nama']) ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <button type="submit">Filter</button>
            </form>

            <!-- Artikel Grid -->
            <div class="blog-grid">
                <?php if (is_array($artikel) && count($artikel) > 0): ?>
                    <?php foreach ($artikel as $row): ?>
                        <div class="blog-post">
                            <img src="<?= htmlspecialchars($row['gambar']) ?>"
                                 alt="Artikel Hino - <?= htmlspecialchars($row['judul']) ?>"
                                 loading="lazy" />
                            <h2>
                                <a href="/artikel/<?= urlencode($row['slug']) ?>">
                                    <?= htmlspecialchars($row['judul']) ?>
                                </a>
                            </h2>
                            <p><?= substr(strip_tags($row['isi']), 0, 120) ?>...</p>
                            <div class="card-footer">
                                <a href="/artikel/<?= urlencode($row['slug']) ?>"> Baca <?= htmlspecialchars($row['judul']) ?> Selengkapnya</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada artikel yang ditemukan.</p>
                <?php endif; ?>
            </div>

    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
        <div class="pagination" aria-label="Navigasi halaman">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php
                    $params = [];

                    if (!empty($selectedKategori)) {
                        $params['kategori'] = $selectedKategori;
                    }

                    if ($i > 1) {
                        $params['page'] = $i;
                    }

                    $pageUrl = "/artikel" . (!empty($params) ? "?" . http_build_query($params) : "");
                ?>
                <a class="<?= $i === $page ? 'active' : '' ?>" href="<?= $pageUrl ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
    </section>

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

    <script>feather.replace();</script>
</body>
</html>
