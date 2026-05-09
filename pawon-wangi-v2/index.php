<?php
/**
 * ============================================================
 * PAWON WANGI — Landing Page
 * File: index.php (Entry Point)
 * Konsep: MVC (Model-View-Controller) OOP Sederhana
 * ============================================================
 */

// Load semua Model
require_once 'models/MenuModel.php';
require_once 'models/GalleryModel.php';
require_once 'models/TestimonialModel.php';

// Load Controller
require_once 'controllers/PageController.php';

// Buat instance controller dan render halaman
$controller = new PageController();
$controller->render();
?>
