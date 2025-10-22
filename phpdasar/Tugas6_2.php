<?php
echo "<p>Deret: 2, 2, 3, 3, 4, ?, ?</p>";

$b = [2, 2, 3, 3, 4];
for ($i = 5; $i < 7; $i++) {
    if ($i % 2 == 0) {
        $b[$i] = $b[$i - 2] + 1;
    } else {
        $b[$i] = $b[$i - 1];
    }
}

echo "Hasil lengkap: " . implode(", ", $b);
?>