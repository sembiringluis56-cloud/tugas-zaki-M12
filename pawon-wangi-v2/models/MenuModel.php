<?php
/**
 * Model: MenuModel
 * Bertanggung jawab atas data menu cafe
 * Prinsip OOP: Class, Property, Method, Encapsulation
 */
class MenuItem {
    // Properties
    public string $name;
    public string $description;
    public int    $price;
    public string $image;
    public string $category;

    // Constructor
    public function __construct(
        string $name,
        string $description,
        int    $price,
        string $image,
        string $category = 'drink'
    ) {
        $this->name        = $name;
        $this->description = $description;
        $this->price       = $price;
        $this->image       = $image;
        $this->category    = $category;
    }

    // Method: format harga ke Rupiah
    public function getFormattedPrice(): string {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}

class MenuModel {
    private array $items = [];

    public function __construct() {
        // Isi data menu (simulasi database)
        $this->items = [
            new MenuItem(
                'Arabika Ijen',
                'Kopi single origin petikan langsung dari kebun Ijen. Aroma floral, body medium, aftertaste coklat gelap yang membekas.',
                28000,
                'assets/images/ijen_arabica_coffee.jpg'
            ),
            new MenuItem(
                'Chocolate Cocoa Latte',
                'Perpaduan espresso segar dan coklat lokal Bondowoso. Creamy, rich, dan hangat seperti pelukan.',
                32000,
                'assets/images/interior_cafe_bar.jpg'
            ),
            new MenuItem(
                'Tape Coffee Signature',
                'Inovasi khas Pawon Wangi — fermentasi tape singkong bertemu espresso dingin. Unik, manis, dan bikin penasaran.',
                35000,
                'assets/images/tape_coffee.jpg'
            ),
            new MenuItem(
                'Es Teh Kebun',
                'Teh lokal diseduh dingin dengan sentuhan mint segar. Segar habis mendaki, segar habis duduk santai.',
                15000,
                'assets/images/kebun_buah.jpeg',
                'drink'
            ),
            new MenuItem(
                'Pisang Bakar Crispy',
                'Pisang kepok lokal dibakar sempurna, topping coklat dan keju. Cocok menemani waktu santai sore.',
                22000,
                'assets/images/outdor_cafe.jpg',
                'food'
            ),
            new MenuItem(
                'Nasi Goreng Perkebunan',
                'Nasi goreng khas dengan bumbu rempah lokal, telur kampung, dan lalapan segar dari kebun sendiri.',
                28000,
                'assets/images/outdor_cafe2.jpg',
                'food'
            ),
        ];
    }

    // Ambil semua menu
    public function getAll(): array {
        return $this->items;
    }

    // Ambil menu unggulan (3 pertama)
    public function getFeatured(int $limit = 3): array {
        return array_slice($this->items, 0, $limit);
    }

    // Filter berdasarkan kategori
    public function getByCategory(string $category): array {
        return array_filter(
            $this->items,
            fn($item) => $item->category === $category
        );
    }
}
?>
