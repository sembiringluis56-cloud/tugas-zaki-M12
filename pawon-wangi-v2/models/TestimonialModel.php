<?php
/**
 * Model: TestimonialModel
 * Data ulasan pelanggan
 * Prinsip OOP: Class, Property, Method
 */
class Testimonial {
    public string $name;
    public string $role;
    public string $text;
    public int    $rating;

    public function __construct(
        string $name,
        string $role,
        string $text,
        int    $rating = 5
    ) {
        $this->name   = $name;
        $this->role   = $role;
        $this->text   = $text;
        $this->rating = $rating;
    }

    // Method: render bintang rating sebagai string
    public function getStars(): string {
        return str_repeat('★', $this->rating) . str_repeat('☆', 5 - $this->rating);
    }
}

class TestimonialModel {
    private array $reviews = [];

    public function __construct() {
        $this->reviews = [
            new Testimonial(
                'Rizky Firmansyah',
                'Mahasiswa UIN Jember',
                'Kopinya beneran enak, suasananya tenang banget. Pas banget buat nugas sambil healing. View kebunnya bikin betah. Bakalan balik lagi!',
                5
            ),
            new Testimonial(
                'Dewi Rahayu',
                'Wisatawan dari Surabaya',
                'Mampir sebelum ke Kawah Ijen, ternyata tempatnya kece abis. Tape Coffee-nya unik banget dan ga nyesel order. Pelayanannya ramah sekali.',
                5
            ),
            new Testimonial(
                'Ahmad Fadhil',
                'Content Creator Bondowoso',
                'Spot paling instagramable yang pernah aku datangi di Bondowoso. Setiap sudut bisa jadi konten. Highly recommended buat anak muda!',
                5
            ),
        ];
    }

    // Ambil semua testimoni
    public function getAll(): array {
        return $this->reviews;
    }
}
?>
