<?php
echo "<p>Deret: 1, 9, 2, 10, 3, ?, ?</p>";

$c = [1, 9, 2, 10, 3];
for ($i = 5; $i < 7; $i++) {
    if ($i % 2 == 0) {
        $angkaKecil = [];
        for ($j = 0; $j < count($c); $j += 2) {
            $angkaKecil[] = $c[$j];
        }
        $c[$i] = end($angkaKecil) + 1;
    } else {
        $angkaBesar = [];
        for ($j = 1; $j < count($c); $j += 2) {
            $angkaBesar[] = $c[$j];
        }
        $c[$i] = end($angkaBesar) + 1;
    }
}

echo "Hasil lengkap: " . implode(", ", $c);
?>