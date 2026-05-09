# ☕ Pawon Wangi — Landing Page

**Cafe Perkebunan Bondowoso | Jalur Kawah Ijen**

Landing page profesional untuk bisnis cafe Pawon Wangi, dibuat dengan konsep
arsitektur MVC OOP menggunakan PHP, HTML, CSS, dan Vanilla JavaScript.

---

## 📁 Struktur Project

```
pawon-wangi/
│
├── index.php                      ← Entry point utama
│
├── controllers/
│   └── PageController.php         ← Mengorkestrasi Model & View
│
├── models/
│   ├── MenuModel.php              ← Data & logika menu cafe
│   ├── GalleryModel.php           ← Data galeri foto
│   └── TestimonialModel.php       ← Data ulasan pelanggan
│
├── views/
│   └── home.php                   ← Template HTML landing page
│
└── assets/
    ├── css/
    │   └── style.css              ← Semua styling (pure CSS)
    ├── js/
    │   └── main.js                ← JavaScript OOP
    └── images/
        ├── hero-bg.jpg            ← Background hero section
        ├── about-cafe.jpg         ← Foto about section
        ├── arabika-ijen.jpg       ← Foto menu
        ├── choco-latte.jpg        ← Foto menu
        ├── tape-coffee.jpg        ← Foto menu
        ├── teh-kebun.jpg          ← Foto menu
        ├── pisang-bakar.jpg       ← Foto menu
        ├── nasi-goreng.jpg        ← Foto menu
        ├── gallery-cafe.jpg       ← Foto galeri
        ├── gallery-kebun.jpg      ← Foto galeri
        ├── gallery-outdoor.jpg    ← Foto galeri
        ├── gallery-taman.jpg      ← Foto galeri
        ├── gallery-kopi.jpg       ← Foto galeri
        ├── gallery-sunset.jpg     ← Foto galeri
        ├── placeholder-menu.jpg   ← Fallback gambar menu
        └── placeholder-gallery.jpg ← Fallback gambar galeri
```

---

## 🚀 Cara Menjalankan

### Menggunakan PHP Built-in Server (Paling Mudah)

```bash
# Masuk ke folder project
cd pawon-wangi

# Jalankan server lokal di port 8000
php -S localhost:8000

# Buka browser dan akses
# http://localhost:8000
```

### Menggunakan XAMPP / Laragon / WAMP

1. Copy folder `pawon-wangi` ke dalam `htdocs/` (XAMPP) atau `www/` (Laragon)
2. Jalankan Apache
3. Buka `http://localhost/pawon-wangi`

---

## 🖼️ Menambahkan Gambar

Tambahkan file gambar ke folder `assets/images/` sesuai nama file berikut:

| File | Deskripsi | Ukuran Disarankan |
|------|-----------|-------------------|
| `hero-bg.jpg` | Background hero section | 1920×1080px |
| `about-cafe.jpg` | Foto about section | 800×600px |
| `arabika-ijen.jpg` | Foto menu Arabika Ijen | 600×400px |
| `choco-latte.jpg` | Foto Chocolate Cocoa Latte | 600×400px |
| `tape-coffee.jpg` | Foto Tape Coffee Signature | 600×400px |
| `gallery-cafe.jpg` | Foto interior cafe | 800×800px |
| `gallery-kebun.jpg` | Foto kebun buah | 400×400px |
| `gallery-outdoor.jpg` | Foto area outdoor | 400×400px |
| `gallery-taman.jpg` | Foto taman bermain | 400×400px |
| `gallery-kopi.jpg` | Foto bar kopi | 400×400px |
| `gallery-sunset.jpg` | Foto sunset | 400×400px |

> **Tips:** Untuk gambar placeholder sementara, bisa gunakan layanan seperti
> `https://picsum.photos` atau `https://unsplash.com` (gratis untuk pengembangan)

---

## 📱 WhatsApp Integration

Ganti nomor WhatsApp di dua file:

**1. `views/home.php`** — Cari dan ganti `6281234567890` dengan nomor nyata:
```php
href="https://wa.me/6281234567890?text=..."
```

**2. `assets/js/main.js`** — Ganti property WA_NUMBER:
```javascript
this.WA_NUMBER = '6281234567890'; // ← Ganti dengan nomor nyata
```

Format nomor WhatsApp: kode negara + nomor (tanpa +, tanpa strip, tanpa spasi)
Contoh: `628123456789` (untuk nomor Indonesia 0812-3456-789)

---

## 🗺️ Google Maps

Untuk embed peta lokasi nyata di section Maps (`views/home.php`):

1. Buka [Google Maps](https://maps.google.com)
2. Cari lokasi "Pawon Wangi" atau masukkan alamat manual
3. Klik **Share → Embed a map**
4. Copy kode `<iframe src="...">`
5. Ganti iframe yang ada di section Maps dengan kode baru

---

## 🎨 Kustomisasi Warna

Edit CSS variables di `assets/css/style.css` bagian `:root`:

```css
:root {
  --green-dark:   #2d5016;  /* Hijau tua - utama */
  --green-mid:    #4a7c2e;  /* Hijau tengah */
  --green-light:  #a8d470;  /* Hijau muda */
  --brown-dark:   #2d1a0a;  /* Coklat tua */
  --brown-mid:    #7a5c2e;  /* Coklat tengah */
  --brown-light:  #c8a84b;  /* Coklat emas - aksen */
  --cream:        #faf6f0;  /* Background utama */
}
```

---

## 🏗️ Konsep OOP (Model-View-Controller)

### Model
Menyimpan data dan logika bisnis. Setiap class model merepresentasikan satu entitas:

```php
class MenuItem {
    public string $name;        // Property
    public int    $price;       // Property
    
    public function getFormattedPrice(): string {  // Method
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
```

### Controller
Mengorkestrasi model dan view. Bertindak sebagai penghubung:

```php
class PageController {
    private MenuModel $menuModel;  // Dependency
    
    public function render(): void {
        $data = ['menu' => $this->menuModel->getFeatured(3)];
        extract($data);
        require_once 'views/home.php';
    }
}
```

### View
Hanya menampilkan data. Tidak ada logika bisnis:

```php
<?php foreach ($menuFeatured as $item): ?>
  <h3><?= htmlspecialchars($item->name) ?></h3>
  <p><?= $item->getFormattedPrice() ?></p>
<?php endforeach; ?>
```

### JavaScript OOP
Sama dengan PHP — setiap fitur dikapsulkan dalam class sendiri:

```javascript
class NavbarController {
  constructor(navbarId) { /* ... */ }
  _onScroll()   { /* ... */ }  // Private method (konvensi underscore)
  _toggleMenu() { /* ... */ }
}

class App {
  _init() {
    // Komposisi — menggabungkan semua komponen
    this.navbar = new NavbarController('navbar');
    this.reveal = new ScrollReveal('.reveal');
  }
}
```

---

## ✅ Fitur yang Sudah Ada

- [x] Navbar sticky transparan → solid saat scroll
- [x] Mobile hamburger menu
- [x] Hero section fullscreen dengan overlay
- [x] Scroll reveal animation (IntersectionObserver)
- [x] Section: About, Menu, Gallery, Features, Testimonial
- [x] Form booking dengan validasi
- [x] Integrasi WhatsApp (CTA & form submit)
- [x] Google Maps embed
- [x] Floating WhatsApp button
- [x] Footer lengkap
- [x] Fully responsive (desktop, tablet, mobile)
- [x] SEO meta tags lokal Bondowoso
- [x] Semantic HTML & ARIA attributes
- [x] Hover animations & CSS transitions
- [x] OOP PHP (MVC Pattern)
- [x] OOP JavaScript (Class-based)

---

## 📦 Teknologi

| Teknologi | Versi/Keterangan |
|-----------|-----------------|
| PHP | 8.0+ |
| HTML | HTML5 Semantic |
| CSS | Pure CSS3 (Flexbox + Grid) |
| JavaScript | Vanilla ES6+ (Classes, IntersectionObserver) |
| Google Fonts | Playfair Display + Inter |
| Font Awesome | 6.5.0 (CDN) |

---

## 📄 Lisensi

Project ini dibuat untuk keperluan portfolio mahasiswa dan simulasi bisnis nyata.
Bebas dimodifikasi sesuai kebutuhan.

---

*Dibuat dengan ❤️ di Bondowoso — Tempat pulang kecil di jalur panjang menuju Ijen.*
