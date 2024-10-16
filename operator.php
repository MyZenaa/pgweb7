<!DOCTYPE html>
<html>

<body>

    <?php
    // Deklarasi variabel
    $a = 10;
    $b = 5;

    // Penjumlahan menggunakan operator singkat
    $c = $a + $b;
    echo "Hasil dari a + b = $c";
    echo "<br>"; // Output: 15
    // Pengurangan
    $c = $a - $b;
    echo "Hasil dari a - b = $c\n"; // Output: 5
    echo "<br>";
    // Perkalian
    $c = $a * $b;
    echo "Hasil dari a * b = $c\n"; // Output: 50
    echo "<br>";
    // Pembagian
    $c = $a / $b;
    echo "Hasil dari a / b = $c\n"; // Output: 2
    echo "<br>";
    // Modulus (sisa bagi)
    $c = $a % $b;
    echo "Hasil dari a % b = $c\n"; // Output: 0
    echo "<br>";

    // Assignment: ab = y (menugaskan nilai variabel)
    $y = 30;
    $ab = $y; // ab sekarang bernilai sama dengan $y
    echo "Nilai ab setelah assignment: $ab\n"; // Output: 30
    echo "<br>";

    // Penjumlahan: ab + y
    $z = $ab + $y;
    echo "Hasil dari ab + y = $z\n"; // Output: 60
   

    // Equal operator (==) - hanya memeriksa nilai
    $m = 10;
    $n = "10";
    if ($m == $n) {
        echo "m == n (Equal): true\n"; // Output: true
    } else {
        echo "m == n (Equal): false\n";
    }
    echo "<br>";

    // Identical operator (===) - memeriksa nilai dan tipe data
    if ($m === $n) {
        echo "m === n (Identical): true\n";
    } else {
        echo "m === n (Identical): false\n"; // Output: false
    }
    ?>
</body>

</html>