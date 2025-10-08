<?php
// Membuat array 2 dimensi 3x3 dengan angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9); // angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks (tabel)
echo "<b>Matriks 3x3:</b><br>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td align='center'>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j]; // hitung total elemen
    }
    echo "</tr>";
}
echo "</table><br>";

// Tampilkan jumlah total semua elemen
echo "<b>Jumlah total semua elemen: $total</b>";
?>
