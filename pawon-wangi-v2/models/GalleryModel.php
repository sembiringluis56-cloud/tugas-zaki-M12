<?php
/**
 * Model: GalleryModel
 * Data foto galeri cafe
 * Prinsip OOP: Class, Property, Constructor
 */
class GalleryItem {
    public string $src;
    public string $alt;
    public string $label;

    public function __construct(string $src, string $alt, string $label) {
        $this->src   = $src;
        $this->alt   = $alt;
        $this->label = $label;
    }
}

class GalleryModel {
    private array $photos = [];

    public function __construct() {
        $this->photos = [
            new GalleryItem('assets/images/interior_cafe.jpg',      'Interior Cafe Pawon Wangi',   'Area Cafe'),
            new GalleryItem('assets/images/kebun_buah.jpeg',         'Kebun Buah Segar',            'Kebun Buah'),
            new GalleryItem('assets/images/outdor_cafe.jpg',         'Area Outdoor Instagramable',  'Outdoor'),
            new GalleryItem('assets/images/playground_cafe.jpg',     'Taman Bermain Anak',          'Taman Bermain'),
            new GalleryItem('assets/images/interior_cafe_bar.jpg',   'Proses Seduh Kopi Arabika',   'Kopi Bar'),
            new GalleryItem('assets/images/sunset_view.jpg',         'Sunset dari Area Cafe',       'Sunset View'),
        ];
    }

    // Ambil semua foto galeri
    public function getAll(): array {
        return $this->photos;
    }
}
?>
