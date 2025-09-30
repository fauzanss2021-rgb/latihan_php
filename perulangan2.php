<?php
// Program PHP Sederhana - Konversi Angka 0-100 ke Huruf (tanpa tabel)

function konversiNilai($angka) {
    if ($angka >= 0 && $angka <= 10) {
        return "E";
    } elseif ($angka >= 11 && $angka <= 50) {
        return "D";
    } elseif ($angka >= 51 && $angka <= 60) {
        return "C";
    } elseif ($angka >= 61 && $angka <= 79) {
        return "B";
    } elseif ($angka >= 80 && $angka <= 100) {
        return "A";
    } else {
        return "Nilai di luar jangkauan";
    }
}

// Tampilkan angka 0-100 dengan hurufnya
echo "<h2>Konversi Angka 0 - 100 ke Huruf</h2>";

for ($i = 0; $i <= 100; $i++) {
    echo $i . " → " . konversiNilai($i) . "<br>";
}
?>
