<?php
echo "<p>Deret: 4, 6, 9, 13, 18, ?, ?</p>";
$deret = [4, 6, 9, 13, 18];

for ($i = 5; $i < 7; $i++) {
    $selisih_terakhir = $deret[$i - 1] - $deret[$i - 2];
    $angka_baru = $deret[$i - 1] + ($selisih_terakhir + 1);
    $deret[] = $angka_baru;
}

echo "Deret lengkap: ";
foreach ($deret as $angka) {
    echo $angka . " ";
}
?>