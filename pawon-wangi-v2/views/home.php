<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- ===== SEO Meta Tags ===== -->
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>" />
  <meta name="keywords" content="Cafe Bondowoso, Cafe Tapen, Rest Area Ijen, Tempat Nongkrong Bondowoso, Pawon Wangi, Kopi Ijen" />
  <meta name="author" content="Pawon Wangi" />
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($metaDesc) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="id_ID" />

  <!-- ===== Google Fonts ===== -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- ===== Font Awesome Icons ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- ===== Custom Stylesheet ===== -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- ============================================================
       NAVBAR
  ============================================================ -->
  <nav class="navbar" id="navbar" role="navigation" aria-label="Navigasi Utama">
    <div class="nav-container">
      <a href="#" class="nav-logo" aria-label="Pawon Wangi - Beranda">
        <span class="logo-icon" aria-hidden="true">☕</span>
        <span class="logo-text">Pawon Wangi</span>
      </a>
      <button class="nav-toggle" id="navToggle" aria-label="Buka menu navigasi" aria-expanded="false">
        <i class="fa-solid fa-bars" aria-hidden="true"></i>
      </button>
      <ul class="nav-menu" id="navMenu" role="menubar">
        <li role="none"><a href="#about"       class="nav-link" role="menuitem">Tentang</a></li>
        <li role="none"><a href="#menu"        class="nav-link" role="menuitem">Menu</a></li>
        <li role="none"><a href="#gallery"     class="nav-link" role="menuitem">Galeri</a></li>
        <li role="none"><a href="#testimonial" class="nav-link" role="menuitem">Ulasan</a></li>
        <li role="none"><a href="#booking"     class="nav-link nav-btn" role="menuitem">Reservasi</a></li>
      </ul>
    </div>
  </nav>

  <!-- ============================================================
       HERO SECTION
  ============================================================ -->
  <section class="hero" id="hero" aria-label="Hero Section">
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="hero-content">
      <span class="hero-badge reveal">Bondowoso · Jawa Timur</span>
      <h1 class="hero-title reveal">
        Rehat Sejenak di<br />
        <em>Jalur Legendaris Kawah Ijen</em>
      </h1>
      <p class="hero-subtitle reveal">
        Tempat pulang kecil di jalur panjang menuju Ijen.<br />
        Kopi lokal, udara segar, dan suasana yang tak ingin kamu tinggalkan.
      </p>
      <div class="hero-actions reveal">
        <a href="#menu" class="btn btn-primary">
          <i class="fa-solid fa-mug-hot" aria-hidden="true"></i> Beli Sekarang
        </a>
        <a href="#about" class="btn btn-outline">
          <i class="fa-solid fa-leaf" aria-hidden="true"></i> Kenali Kami
        </a>
      </div>
      <div class="hero-stats reveal" aria-label="Statistik Pawon Wangi">
        <div class="stat">
          <span class="stat-num">500+</span>
          <span class="stat-label">Pelanggan/Bulan</span>
        </div>
        <div class="stat-divider" aria-hidden="true"></div>
        <div class="stat">
          <span class="stat-num">4.9★</span>
          <span class="stat-label">Rating Google</span>
        </div>
        <div class="stat-divider" aria-hidden="true"></div>
        <div class="stat">
          <span class="stat-num">3 Ha</span>
          <span class="stat-label">Area Kebun</span>
        </div>
      </div>
    </div>
    <div class="hero-scroll-hint" aria-hidden="true">
      <span>Scroll ke bawah</span>
      <i class="fa-solid fa-chevron-down"></i>
    </div>
  </section>

  <!-- ============================================================
       ABOUT SECTION
  ============================================================ -->
  <section class="about section" id="about" aria-label="Tentang Kami">
    <div class="container">
      <div class="about-grid">
        <div class="about-visual reveal">
          <div class="about-img-wrapper">
            <img
              src="assets/images/interior_cafe.jpg"
              alt="Interior cafe Pawon Wangi yang nyaman dan natural"
              class="about-img"
              loading="lazy"
            />
            <div class="about-badge-float" aria-hidden="true">
              <i class="fa-solid fa-seedling"></i>
              <span>Cafe Perkebunan</span>
            </div>
          </div>
        </div>
        <div class="about-content reveal">
          <span class="section-label">Tentang Kami</span>
          <h2 class="section-title">Tempat Kopi Tumbuh,<br />Cerita Mengalir</h2>
          <p class="about-text">
            Pawon Wangi lahir dari cinta terhadap tanah Bondowoso dan kopi Ijen yang legenda.
            Kami bukan sekadar cafe — kami adalah peristirahatan di antara perjalanan panjang menuju kawah biru yang mendunia.
          </p>
          <p class="about-text">
            Di sini, setiap cangkir kopi diceritakan oleh kebun yang terhampar di depanmu.
            Setiap tegukan membawa aroma tanah vulkanik yang kaya, sementara angin segar pegunungan
            menemani hari-harimu yang penuh rasa.
          </p>
          <div class="about-features" aria-label="Fasilitas Pawon Wangi">
            <div class="about-feat-item">
              <i class="fa-solid fa-tree" aria-hidden="true"></i>
              <span>Kebun buah 3 hektar</span>
            </div>
            <div class="about-feat-item">
              <i class="fa-solid fa-children" aria-hidden="true"></i>
              <span>Taman bermain keluarga</span>
            </div>
            <div class="about-feat-item">
              <i class="fa-solid fa-road" aria-hidden="true"></i>
              <span>Jalur wisata Kawah Ijen</span>
            </div>
            <div class="about-feat-item">
              <i class="fa-solid fa-wifi" aria-hidden="true"></i>
              <span>Free WiFi kencang</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       MENU HIGHLIGHT
  ============================================================ -->
  <section class="menu section" id="menu" aria-label="Menu Unggulan">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Menu Unggulan</span>
        <h2 class="section-title">Cita Rasa Perkebunan Ijen</h2>
        <p class="section-desc">
          Setiap minuman kami adalah perjalanan rasa — dari biji kopi pilihan hingga
          sentuhan inovasi lokal yang tak terlupakan.
        </p>
      </div>
      <div class="menu-grid">
        <?php foreach ($menuFeatured as $item): ?>
        <article class="menu-card reveal" aria-label="<?= htmlspecialchars($item->name) ?>">
          <div class="menu-img-wrapper">
            <img
              src="<?= htmlspecialchars($item->image) ?>"
              alt="<?= htmlspecialchars($item->name) ?> - <?= htmlspecialchars($item->description) ?>"
              class="menu-img"
              loading="lazy"
              onerror="this.src='assets/images/ijen_arabica_coffee.jpg'"
            />
            <div class="menu-overlay" aria-hidden="true">
              <a href="#booking" class="menu-order-btn">Pesan Sekarang</a>
            </div>
          </div>
          <div class="menu-body">
            <h3 class="menu-name"><?= htmlspecialchars($item->name) ?></h3>
            <p class="menu-desc"><?= htmlspecialchars($item->description) ?></p>
            <div class="menu-footer">
              <span class="menu-price" aria-label="Harga <?= $item->getFormattedPrice() ?>">
                <?= $item->getFormattedPrice() ?>
              </span>
              <a href="#booking" class="menu-cta" aria-label="Pesan <?= htmlspecialchars($item->name) ?>">
                <i class="fa-solid fa-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="menu-cta-wrapper reveal">
        <a href="#booking" class="btn btn-primary">
          <i class="fa-solid fa-utensils" aria-hidden="true"></i> Reservasi & Pesan
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       GALLERY SECTION
  ============================================================ -->
  <section class="gallery section" id="gallery" aria-label="Galeri Foto">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Galeri</span>
        <h2 class="section-title">Setiap Sudut adalah Cerita</h2>
        <p class="section-desc">
          Dari pagi berkabut hingga sore berwarna — Pawon Wangi selalu punya
          momen yang layak diabadikan.
        </p>
      </div>
      <div class="gallery-grid">
        <?php foreach ($gallery as $idx => $photo): ?>
        <div class="gallery-item reveal <?= $idx === 0 ? 'gallery-featured' : '' ?>">
          <img
            src="<?= htmlspecialchars($photo->src) ?>"
            alt="<?= htmlspecialchars($photo->alt) ?>"
            class="gallery-img"
            loading="lazy"
            onerror="this.src='assets/images/interior_cafe.jpg'"
          />
          <div class="gallery-caption" aria-hidden="true">
            <span><?= htmlspecialchars($photo->label) ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FEATURES / USP SECTION
  ============================================================ -->
  <section class="features section" id="features" aria-label="Keunggulan Kami">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Keunggulan</span>
        <h2 class="section-title">Kenapa Pawon Wangi?</h2>
      </div>
      <div class="features-grid">
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-map-location-dot"></i></div>
          <h3 class="feature-title">Rest Area Ijen</h3>
          <p class="feature-desc">Lokasi strategis di jalur utama menuju Kawah Ijen. Rehat sempurna sebelum dan setelah mendaki.</p>
        </div>
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-mug-hot"></i></div>
          <h3 class="feature-title">Kopi Lokal Bondowoso</h3>
          <p class="feature-desc">Single origin Arabika Ijen, dipetik langsung dari kebun sekitar. Murni, segar, dan penuh karakter.</p>
        </div>
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-tree"></i></div>
          <h3 class="feature-title">Kebun Buah & Taman</h3>
          <p class="feature-desc">Hamparan kebun 3 hektar dengan taman bermain. Cocok untuk keluarga, pasangan, dan group trip.</p>
        </div>
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-spa"></i></div>
          <h3 class="feature-title">Healing Vibes</h3>
          <p class="feature-desc">Suasana asri dan tenang yang menyembuhkan. Udara segar pegunungan gratis setiap kunjungan.</p>
        </div>
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-camera-retro"></i></div>
          <h3 class="feature-title">Spot Instagramable</h3>
          <p class="feature-desc">Setiap sudut dirancang untuk estetika. Feed Instagram-mu akan berterima kasih setelahnya.</p>
        </div>
        <div class="feature-card reveal">
          <div class="feature-icon" aria-hidden="true"><i class="fa-solid fa-clock"></i></div>
          <h3 class="feature-title">Buka Tiap Hari</h3>
          <p class="feature-desc">Kami hadir 07.00–22.00 WIB, tujuh hari seminggu. Kapanpun kamu butuh rehat, kami siap.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       TESTIMONIAL SECTION
  ============================================================ -->
  <section class="testimonial section" id="testimonial" aria-label="Ulasan Pelanggan">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Ulasan Pelanggan</span>
        <h2 class="section-title">Kata Mereka tentang<br />Pawon Wangi</h2>
      </div>
      <div class="testimonial-grid">
        <?php foreach ($testimonials as $testi): ?>
        <div class="testi-card reveal">
          <div class="testi-stars" aria-label="Rating <?= $testi->rating ?> dari 5 bintang">
            <?= $testi->getStars() ?>
          </div>
          <p class="testi-text">"<?= htmlspecialchars($testi->text) ?>"</p>
          <div class="testi-author">
            <div class="testi-avatar" aria-hidden="true">
              <?= strtoupper(mb_substr($testi->name, 0, 1)) ?>
            </div>
            <div class="testi-info">
              <span class="testi-name"><?= htmlspecialchars($testi->name) ?></span>
              <span class="testi-role"><?= htmlspecialchars($testi->role) ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       BOOKING / CTA SECTION
  ============================================================ -->
  <section class="booking section" id="booking" aria-label="Reservasi Meja">
    <div class="container">
      <div class="booking-wrapper">
        <div class="booking-info reveal">
          <span class="section-label">Reservasi Meja</span>
          <h2 class="section-title">Siapkan Tempat<br />Terbaikmu</h2>
          <p class="booking-desc">
            Reservasi meja sekarang dan pastikan kamu mendapat spot terbaik
            di Pawon Wangi. Atau hubungi kami langsung via WhatsApp.
          </p>
          <a
            href="https://wa.me/6281234567890?text=Halo%20Pawon%20Wangi%2C%20saya%20ingin%20reservasi%20meja"
            class="btn btn-whatsapp"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat via WhatsApp Pawon Wangi"
          >
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Chat via WhatsApp
          </a>
        </div>
        <!-- Form: validasi via JS, submit ke WhatsApp -->
        <div class="booking-form-wrapper reveal">
          <form class="booking-form" id="bookingForm" novalidate>
            <div class="form-group">
              <label for="bookName">Nama Lengkap</label>
              <input
                type="text"
                id="bookName"
                name="name"
                placeholder="Nama kamu..."
                autocomplete="name"
                required
              />
            </div>
            <div class="form-group">
              <label for="bookEmail">Email</label>
              <input
                type="email"
                id="bookEmail"
                name="email"
                placeholder="email@kamu.com"
                autocomplete="email"
                required
              />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="bookPeople">Jumlah Orang</label>
                <select id="bookPeople" name="people" required>
                  <option value="">Pilih...</option>
                  <option value="1-2">1–2 orang</option>
                  <option value="3-5">3–5 orang</option>
                  <option value="6-10">6–10 orang</option>
                  <option value="10+">10+ orang</option>
                </select>
              </div>
              <div class="form-group">
                <label for="bookDate">Tanggal Kunjungan</label>
                <input type="date" id="bookDate" name="date" required />
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-full">
              <i class="fa-solid fa-calendar-check" aria-hidden="true"></i> Book Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       GOOGLE MAPS SECTION
  ============================================================ -->
  <section class="maps section" id="maps" aria-label="Lokasi Pawon Wangi">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Lokasi</span>
        <h2 class="section-title">Temukan Kami di Sini</h2>
        <p class="section-desc">Jl. Kawah Ijen No.9, Tapen, Bondowoso, Jawa Timur 68251</p>
      </div>
      <div class="map-wrapper reveal">
        <!-- Ganti src dengan embed Google Maps nyata untuk produksi -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126274.26!2d114.05!3d-7.90!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68b!2sBondowoso%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid"
          width="100%"
          height="420"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi Pawon Wangi di Google Maps"
          aria-label="Peta Google Maps menuju Pawon Wangi"
        ></iframe>
      </div>
      <div class="location-info reveal">
        <div class="loc-item">
          <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
          <span>Jl. Kawah Ijen No.9, Tapen, Bondowoso</span>
        </div>
        <div class="loc-item">
          <i class="fa-solid fa-clock" aria-hidden="true"></i>
          <span>Setiap hari, 07.00 – 22.00 WIB</span>
        </div>
        <div class="loc-item">
          <i class="fa-solid fa-phone" aria-hidden="true"></i>
          <span>+62 812-3456-7890</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       FOOTER
  ============================================================ -->
  <footer class="footer" id="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="footer-logo">
            <span class="logo-icon" aria-hidden="true">☕</span>
            <span class="logo-text">Pawon Wangi</span>
          </div>
          <p class="footer-tagline">
            Tempat pulang kecil di jalur panjang menuju Ijen.
            Kopi lokal, suasana alami, kenangan tak terlupakan.
          </p>
          <div class="footer-socials" aria-label="Media Sosial">
            <a href="#" aria-label="Instagram Pawon Wangi" class="social-link">
              <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="#" aria-label="TikTok Pawon Wangi" class="social-link">
              <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
            </a>
            <a href="#" aria-label="Facebook Pawon Wangi" class="social-link">
              <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a href="https://wa.me/6281234567890" aria-label="WhatsApp Pawon Wangi" class="social-link" target="_blank" rel="noopener noreferrer">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="footer-links">
          <h4 class="footer-heading">Navigasi</h4>
          <ul>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#gallery">Galeri</a></li>
            <li><a href="#testimonial">Ulasan</a></li>
            <li><a href="#booking">Reservasi</a></li>
          </ul>
        </div>
        <div class="footer-hours">
          <h4 class="footer-heading">Jam Operasional</h4>
          <div class="hours-list">
            <div class="hours-item">
              <span>Senin – Jumat</span>
              <span>07.00 – 22.00</span>
            </div>
            <div class="hours-item">
              <span>Sabtu – Minggu</span>
              <span>06.00 – 23.00</span>
            </div>
            <div class="hours-item hours-note">
              <span>Hari Libur Nasional</span>
              <span>06.00 – 23.00</span>
            </div>
          </div>
        </div>
        <div class="footer-contact">
          <h4 class="footer-heading">Kontak</h4>
          <address class="contact-list">
            <div class="contact-item">
              <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
              <span>Jl. Kawah Ijen No.9,<br />Tapen, Bondowoso</span>
            </div>
            <div class="contact-item">
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
              <a href="tel:+6281234567890">+62 812-3456-7890</a>
            </div>
            <div class="contact-item">
              <i class="fa-solid fa-envelope" aria-hidden="true"></i>
              <a href="mailto:hello@pawonwangi.id">hello@pawonwangi.id</a>
            </div>
          </address>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2024 Pawon Wangi. All rights reserved. · Dibuat dengan ❤️ di Bondowoso</p>
        <p class="footer-keywords">
          #CafeBondowoso #CafeTapen #RestAreaIjen #TempatNongkrongBondowoso #KopiIjen
        </p>
      </div>
    </div>
  </footer>

  <!-- ===== Floating WhatsApp Button ===== -->
  <a
    href="https://wa.me/6281234567890?text=Halo%20Pawon%20Wangi!"
    class="wa-float-btn"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat WhatsApp Pawon Wangi"
  >
    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    <span class="wa-tooltip">Ada yang bisa kami bantu?</span>
  </a>

  <!-- ===== JavaScript ===== -->
  <script src="assets/js/main.js"></script>

</body>
</html>
