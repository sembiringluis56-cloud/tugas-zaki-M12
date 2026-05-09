<?php
/**
 * Controller: PageController
 * Mengorkestrasi Model dan View
 * Prinsip OOP: Controller sebagai penghubung Model <-> View
 */
class PageController {
    private MenuModel        $menuModel;
    private GalleryModel     $galleryModel;
    private TestimonialModel $testimonialModel;

    public function __construct() {
        // Inisialisasi semua model
        $this->menuModel        = new MenuModel();
        $this->galleryModel     = new GalleryModel();
        $this->testimonialModel = new TestimonialModel();
    }

    /**
     * Method utama: kumpulkan data dari model, kirim ke view
     */
    public function render(): void {
        // Siapkan data untuk view
        $data = [
            'pageTitle'    => 'Pawon Wangi — Cafe Perkebunan Bondowoso | Rest Area Kawah Ijen',
            'metaDesc'     => 'Cafe premium di jalur Kawah Ijen, Tapen, Bondowoso. Nikmati kopi Arabika Ijen, kebun buah, taman bermain, dan suasana healing terbaik.',
            'menuFeatured' => $this->menuModel->getFeatured(3),
            'menuAll'      => $this->menuModel->getAll(),
            'gallery'      => $this->galleryModel->getAll(),
            'testimonials' => $this->testimonialModel->getAll(),
        ];

        // Extract supaya variabel bisa dipakai langsung di view
        extract($data);

        // Load view template
        require_once 'views/home.php';
    }
}
?>
