<?php
function print_triangle($n) {
    // Satırı kontrol etmek için bir while döngüsü kullan
    $i = 1;
    while ($i <= $n) {
        // Her satır için yıldızları yazmak için bir for döngüsü kullan
        for ($j = 0; $j < $i; $j++) {
            echo '* ';
        }
        echo "<br>";  
        $i++;  // Bir sonraki satıra geçiyoruz
    }
}

// Fonksiyonu test edelim
print_triangle(20);
?>