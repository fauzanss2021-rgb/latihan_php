<?php
// Membuat timestamp untuk 28 November 2012
$timestamp = mktime(0, 0, 0, 11, 28, 2012);

// Ambil detail tanggal dengan getdate()
$tanggal = getdate($timestamp);

// Susun format dd-mm-yyyy
echo "Tanggal: " . $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'];
?>
