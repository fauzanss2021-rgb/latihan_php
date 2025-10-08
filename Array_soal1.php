<?php
// Membuat array 2 dimensi
$siswa = array(
    array("Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90),
    array("Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88),
    array("Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95)
);

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1]["Nama"] . "): " . $siswa[1]["Bahasa"] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Daftar Nilai Siswa:<br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . " | ";
    echo "Matematika: " . $data["Matematika"] . " | ";
    echo "Bahasa: " . $data["Bahasa"] . "<br>";
}
?>
