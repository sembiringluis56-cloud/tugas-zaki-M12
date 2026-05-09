#!/bin/bash
# ============================================================
# create-placeholders.sh
# Script untuk membuat gambar placeholder sementara
# Jalankan: bash create-placeholders.sh
# ============================================================

echo "☕ Membuat placeholder gambar untuk Pawon Wangi..."

# Cek apakah ImageMagick tersedia
if ! command -v convert &> /dev/null; then
    echo "⚠️  ImageMagick tidak tersedia."
    echo "   Silakan tambahkan gambar nyata ke folder assets/images/"
    echo ""
    echo "   Nama file yang dibutuhkan:"
    echo "   - hero-bg.jpg         (1920x1080)"
    echo "   - about-cafe.jpg      (800x600)"
    echo "   - arabika-ijen.jpg    (600x400)"
    echo "   - choco-latte.jpg     (600x400)"
    echo "   - tape-coffee.jpg     (600x400)"
    echo "   - teh-kebun.jpg       (600x400)"
    echo "   - gallery-cafe.jpg    (800x800)"
    echo "   - gallery-kebun.jpg   (400x400)"
    echo "   - gallery-outdoor.jpg (400x400)"
    echo "   - gallery-taman.jpg   (400x400)"
    echo "   - gallery-kopi.jpg    (400x400)"
    echo "   - gallery-sunset.jpg  (400x400)"
    echo "   - placeholder-menu.jpg    (600x400)"
    echo "   - placeholder-gallery.jpg (400x400)"
    exit 1
fi

DIR="assets/images"
mkdir -p "$DIR"

# Fungsi buat placeholder
make_img() {
    local file="$1"
    local w="$2"
    local h="$3"
    local color="$4"
    local label="$5"

    convert -size "${w}x${h}" \
        xc:"$color" \
        -fill white \
        -font DejaVu-Sans \
        -pointsize 24 \
        -gravity center \
        -annotate 0 "$label" \
        "$DIR/$file" 2>/dev/null && echo "  ✓ $file"
}

# Buat semua placeholder
make_img "hero-bg.jpg"             1920 1080 "#2d5016"  "☕ Pawon Wangi - Hero"
make_img "about-cafe.jpg"          800  600  "#4a7c2e"  "Tentang Pawon Wangi"
make_img "arabika-ijen.jpg"        600  400  "#7a5c2e"  "Arabika Ijen"
make_img "choco-latte.jpg"         600  400  "#5a3a1e"  "Chocolate Cocoa Latte"
make_img "tape-coffee.jpg"         600  400  "#6a4a2e"  "Tape Coffee Signature"
make_img "teh-kebun.jpg"           600  400  "#3a6a3a"  "Es Teh Kebun"
make_img "pisang-bakar.jpg"        600  400  "#8a6a2e"  "Pisang Bakar Crispy"
make_img "nasi-goreng.jpg"         600  400  "#9a5a2e"  "Nasi Goreng Perkebunan"
make_img "gallery-cafe.jpg"        800  800  "#3d2510"  "Area Cafe"
make_img "gallery-kebun.jpg"       400  400  "#2d5016"  "Kebun Buah"
make_img "gallery-outdoor.jpg"     400  400  "#4a7c2e"  "Outdoor"
make_img "gallery-taman.jpg"       400  400  "#3a6a2e"  "Taman Bermain"
make_img "gallery-kopi.jpg"        400  400  "#5a3a1e"  "Kopi Bar"
make_img "gallery-sunset.jpg"      400  400  "#8a5a2e"  "Sunset View"
make_img "placeholder-menu.jpg"    600  400  "#c8a84b"  "No Image"
make_img "placeholder-gallery.jpg" 400  400  "#7a5c2e"  "No Image"

echo ""
echo "✅ Selesai! Placeholder gambar telah dibuat."
echo "   Ganti dengan gambar nyata untuk tampilan terbaik."
