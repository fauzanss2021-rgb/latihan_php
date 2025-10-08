<?php
// Membuat array asosiatif multidimensi
$produk = [
    [
        "nama" => "Smartphone X1",
        "kategori" => "Elektronik",
        "harga" => 3500000,
        "rating" => 4.5
    ],
    [
        "nama" => "Headphone Pro",
        "kategori" => "Aksesoris",
        "harga" => 1250000,
        "rating" => 4.7
    ],
    [
        "nama" => "Laptop UltraBook",
        "kategori" => "Komputer",
        "harga" => 7500000,
        "rating" => 4.8
    ]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

// Cetak produk dengan harga tertinggi
echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama Produk: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
