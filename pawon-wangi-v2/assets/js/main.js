/**
 * ============================================================
 * PAWON WANGI — main.js
 * JavaScript dengan konsep OOP (Class-based Architecture)
 *
 * Classes:
 *   - NavbarController  : Mengelola navbar transparan & mobile menu
 *   - ScrollReveal      : Animasi fade-in elemen saat masuk viewport
 *   - BookingForm       : Validasi & submit form reservasi via WhatsApp
 *   - Toast             : Notifikasi popup ringan (static class)
 *   - SmoothScroll      : Scroll halus ke anchor
 *   - HeroParallax      : Efek parallax pada hero section
 *   - App               : Entry point, inisialisasi semua komponen
 * ============================================================
 */

'use strict';

/* ============================================================
   CLASS: NavbarController
   Mengubah navbar dari transparan menjadi solid saat scroll,
   dan mengelola mobile hamburger menu.
============================================================ */
class NavbarController {
  constructor(navbarId, toggleId, menuId) {
    this.navbar   = document.getElementById(navbarId);
    this.toggle   = document.getElementById(toggleId);
    this.menu     = document.getElementById(menuId);
    this.isOpen   = false;
    this.lastScroll = 0;

    if (!this.navbar) return;
    this._init();
  }

  _init() {
    // Scroll listener untuk efek transparan -> solid
    window.addEventListener('scroll', () => this._onScroll(), { passive: true });

    // Toggle mobile menu
    this.toggle?.addEventListener('click', () => this._toggleMenu());

    // Tutup menu saat klik nav link
    this.menu?.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => this._closeMenu());
    });

    // Tutup menu saat klik di luar area menu
    document.addEventListener('click', (e) => {
      if (this.isOpen && !this.navbar.contains(e.target)) {
        this._closeMenu();
      }
    });

    // Jalankan sekali untuk state awal
    this._onScroll();
  }

  _onScroll() {
    const scrollY = window.scrollY;
    this.navbar.classList.toggle('scrolled', scrollY > 60);
    this.lastScroll = scrollY;
  }

  _toggleMenu() {
    this.isOpen ? this._closeMenu() : this._openMenu();
  }

  _openMenu() {
    this.isOpen = true;
    this.menu?.classList.add('open');
    if (this.toggle) {
      this.toggle.innerHTML = '<i class="fa-solid fa-xmark" aria-hidden="true"></i>';
      this.toggle.setAttribute('aria-expanded', 'true');
    }
    document.body.style.overflow = 'hidden';
  }

  _closeMenu() {
    this.isOpen = false;
    this.menu?.classList.remove('open');
    if (this.toggle) {
      this.toggle.innerHTML = '<i class="fa-solid fa-bars" aria-hidden="true"></i>';
      this.toggle.setAttribute('aria-expanded', 'false');
    }
    document.body.style.overflow = '';
  }
}

/* ============================================================
   CLASS: ScrollReveal
   Menggunakan IntersectionObserver untuk fade-in elemen
   saat pertama kali masuk viewport.
============================================================ */
class ScrollReveal {
  /**
   * @param {string} selector - CSS selector elemen yang akan di-reveal
   * @param {object} options  - Opsi IntersectionObserver
   */
  constructor(selector = '.reveal', options = {}) {
    this.selector = selector;
    this.elements = document.querySelectorAll(selector);
    this.options  = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px',
      ...options
    };

    if (this.elements.length === 0) return;
    this._init();
  }

  _init() {
    // Fallback untuk browser lama yang tidak support IntersectionObserver
    if (!('IntersectionObserver' in window)) {
      this.elements.forEach(el => el.classList.add('visible'));
      return;
    }

    this.observer = new IntersectionObserver(
      (entries) => this._onIntersect(entries),
      this.options
    );

    // Tambahkan staggered delay untuk efek cascade
    this.elements.forEach((el, idx) => {
      const delay = (idx % 4) * 90; // max 4 kolom, delay 90ms tiap item
      el.style.transitionDelay = `${delay}ms`;
      this.observer.observe(el);
    });
  }

  _onIntersect(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        // Unobserve setelah animasi untuk performa
        this.observer.unobserve(entry.target);
      }
    });
  }
}

/* ============================================================
   CLASS: Toast
   Notifikasi kecil yang muncul di bagian bawah layar.
   Digunakan sebagai static class (tidak perlu instansiasi).
============================================================ */
class Toast {
  static COLORS = {
    success: '#2d5016',
    warning: '#7a5c2e',
    error:   '#8b1a1a',
    info:    '#1a3a5a',
  };

  /**
   * Tampilkan notifikasi toast
   * @param {string} message  - Pesan yang ditampilkan
   * @param {string} type     - 'success' | 'warning' | 'error' | 'info'
   * @param {number} duration - Durasi dalam ms (default 3500)
   */
  static show(message, type = 'success', duration = 3500) {
    // Hapus toast sebelumnya jika ada
    document.querySelector('.pw-toast')?.remove();

    const bg = Toast.COLORS[type] || Toast.COLORS.success;

    const toast = document.createElement('div');
    toast.className = 'pw-toast';
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'polite');
    toast.textContent = message;

    Object.assign(toast.style, {
      position:   'fixed',
      bottom:     '5.5rem',
      left:       '50%',
      transform:  'translateX(-50%) translateY(20px)',
      background: bg,
      color:      '#faf6f0',
      padding:    '13px 26px',
      borderRadius: '50px',
      fontSize:   '0.87rem',
      fontWeight: '500',
      fontFamily: "'Inter', sans-serif",
      boxShadow:  '0 8px 32px rgba(0,0,0,0.3)',
      zIndex:     '9999',
      opacity:    '0',
      transition: 'all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)',
      whiteSpace: 'nowrap',
      maxWidth:   '90vw',
      textAlign:  'center',
    });

    document.body.appendChild(toast);

    // Animate masuk
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        toast.style.opacity   = '1';
        toast.style.transform = 'translateX(-50%) translateY(0)';
      });
    });

    // Animate keluar lalu hapus
    setTimeout(() => {
      toast.style.opacity   = '0';
      toast.style.transform = 'translateX(-50%) translateY(20px)';
      setTimeout(() => toast.remove(), 450);
    }, duration);
  }
}

/* ============================================================
   CLASS: BookingForm
   Mengelola validasi form reservasi dan
   mengirimnya via WhatsApp dengan format pesan rapi.
============================================================ */
class BookingForm {
  constructor(formId) {
    this.form = document.getElementById(formId);
    if (!this.form) return;

    this.WA_NUMBER = '6281234567890'; // Ganti dengan nomor WhatsApp nyata
    this._init();
  }

  _init() {
    // Set minimum tanggal ke hari ini
    const dateInput = this.form.querySelector('#bookDate');
    if (dateInput) {
      const today = new Date().toISOString().split('T')[0];
      dateInput.setAttribute('min', today);
    }

    this.form.addEventListener('submit', (e) => this._handleSubmit(e));

    // Real-time validasi visual
    this.form.querySelectorAll('input, select').forEach(field => {
      field.addEventListener('blur', () => this._validateField(field));
    });
  }

  _handleSubmit(e) {
    e.preventDefault();

    const data = this._collectData();
    if (!this._validate(data)) return;

    this._sendViaWhatsApp(data);
  }

  _collectData() {
    return {
      name:   this.form.querySelector('#bookName')?.value.trim(),
      email:  this.form.querySelector('#bookEmail')?.value.trim(),
      people: this.form.querySelector('#bookPeople')?.value,
      date:   this.form.querySelector('#bookDate')?.value,
    };
  }

  _validate(data) {
    if (!data.name) {
      Toast.show('Mohon isi nama lengkap kamu. 😊', 'warning');
      this.form.querySelector('#bookName')?.focus();
      return false;
    }
    if (!data.email || !this._isValidEmail(data.email)) {
      Toast.show('Mohon isi alamat email yang valid.', 'warning');
      this.form.querySelector('#bookEmail')?.focus();
      return false;
    }
    if (!data.people) {
      Toast.show('Mohon pilih jumlah orang.', 'warning');
      this.form.querySelector('#bookPeople')?.focus();
      return false;
    }
    if (!data.date) {
      Toast.show('Mohon pilih tanggal kunjungan.', 'warning');
      this.form.querySelector('#bookDate')?.focus();
      return false;
    }
    return true;
  }

  _validateField(field) {
    const isValid = field.checkValidity();
    field.style.borderColor = isValid
      ? 'var(--cream-mid)'
      : 'rgba(200, 80, 80, 0.6)';
  }

  _isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  _formatDate(dateStr) {
    if (!dateStr) return dateStr;
    const [y, m, d] = dateStr.split('-');
    const months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
    return `${d} ${months[parseInt(m) - 1]} ${y}`;
  }

  _sendViaWhatsApp(data) {
    const dateFormatted = this._formatDate(data.date);
    const message = [
      '🌿 *Reservasi Meja — Pawon Wangi*',
      '',
      `👤 Nama     : ${data.name}`,
      `📧 Email    : ${data.email}`,
      `👥 Orang    : ${data.people}`,
      `📅 Tanggal  : ${dateFormatted}`,
      '',
      'Terima kasih, kami segera konfirmasi! 🙏',
    ].join('\n');

    const url = `https://wa.me/${this.WA_NUMBER}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank', 'noopener,noreferrer');

    Toast.show('Reservasi dikirim via WhatsApp! Kami segera menghubungi kamu ✓', 'success', 4000);
    this.form.reset();

    // Reset border color
    this.form.querySelectorAll('input, select').forEach(f => {
      f.style.borderColor = '';
    });
  }
}

/* ============================================================
   CLASS: SmoothScroll
   Mengelola scroll halus ke elemen anchor,
   dengan offset untuk navbar yang fixed.
============================================================ */
class SmoothScroll {
  constructor(navbarSelector = '.navbar') {
    this.navbar = document.querySelector(navbarSelector);
    this._init();
  }

  _init() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => this._handleClick(e, anchor));
    });
  }

  _handleClick(e, anchor) {
    const href = anchor.getAttribute('href');
    if (!href || href === '#') return;

    const target = document.querySelector(href);
    if (!target) return;

    e.preventDefault();
    const navHeight = this.navbar?.offsetHeight || 72;
    const targetTop = target.getBoundingClientRect().top + window.scrollY - navHeight - 16;

    window.scrollTo({
      top:      targetTop,
      behavior: 'smooth',
    });
  }
}

/* ============================================================
   CLASS: HeroParallax
   Efek parallax ringan pada hero background saat scroll.
   Hanya aktif di perangkat non-mobile untuk performa.
============================================================ */
class HeroParallax {
  constructor(heroSelector = '.hero') {
    this.hero = document.querySelector(heroSelector);

    // Nonaktifkan di mobile (performa & UX)
    if (!this.hero || window.innerWidth < 768) return;

    this._init();
  }

  _init() {
    window.addEventListener('scroll', () => this._onScroll(), { passive: true });
  }

  _onScroll() {
    const scrollY = window.scrollY;
    const viewportH = window.innerHeight;

    if (scrollY < viewportH * 1.5) {
      // Parallax halus — background bergerak lebih lambat dari scroll
      this.hero.style.backgroundPositionY = `${scrollY * 0.25}px`;
    }
  }
}

/* ============================================================
   CLASS: App (Entry Point)
   Mengorkestrasi dan menginisialisasi semua komponen.
   Prinsip OOP: Composition — App menyatukan semua class.
============================================================ */
class App {
  constructor() {
    this.components = {};
    this._init();
  }

  _init() {
    // Inisialisasi semua komponen
    this.components = {
      navbar:      new NavbarController('navbar', 'navToggle', 'navMenu'),
      scrollReveal: new ScrollReveal('.reveal'),
      booking:     new BookingForm('bookingForm'),
      smoothScroll: new SmoothScroll('.navbar'),
      parallax:    new HeroParallax('.hero'),
    };

    // Trigger scroll awal untuk state yang benar
    window.dispatchEvent(new Event('scroll'));

    if (process?.env?.NODE_ENV !== 'production') {
      console.log('%c☕ Pawon Wangi', 'color:#c8a84b;font-size:18px;font-weight:bold;');
      console.log('%cSemua komponen berhasil diinisialisasi.', 'color:#4a7c2e;');
      console.log('Components:', this.components);
    }
  }
}

/* ============================================================
   BOOTSTRAP
   Jalankan App setelah DOM sepenuhnya siap.
============================================================ */
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => new App());
} else {
  // DOM sudah siap
  new App();
}
