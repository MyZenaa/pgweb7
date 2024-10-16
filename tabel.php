<?php
// Data sederhana untuk dimasukkan ke dalam tabel
$data = [
    ["Nama" => "Nafis", "Umur" => 25, "Pekerjaan" => "Desainer"],
    ["Nama" => "Fay", "Umur" => 30, "Pekerjaan" => "Programmer"],
    ["Nama" => "Anggun", "Umur" => 35, "Pekerjaan" => "Manajer"],
    ["Nama" => "Atik", "Umur" => 15, "Pekerjaan" => "Nganggur"],
    ["Nama" => "Azril", "Umur" => 45, "Pekerjaan" => "Polisi"]
];

// Membuat tabel menggunakan HTML dengan PHP
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nama</th><th>Umur</th><th>Pekerjaan</th></tr>"; // Header tabel

// Looping data untuk menampilkan baris di dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row["Nama"] . "</td>";
    echo "<td>" . $row["Umur"] . "</td>";
    echo "<td>" . $row["Pekerjaan"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
