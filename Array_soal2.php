<?php
// Membuat array 2 dimensi
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
foreach ($buah as $b) {
    $subtotal = $b[1] * $b[2]; // harga * stok
    $total += $subtotal;
    echo $b[0] . " → Harga: " . $b[1] . " | Stok: " . $b[2] . " | Total: " . $subtotal . "<br>";
}

echo "<br><b>Total keseluruhan nilai buah: Rp " . number_format($total, 0, ',', '.') . "</b>";
?>
