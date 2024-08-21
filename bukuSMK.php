<?php

function hitungTotalHarga($jumlahBuku) {
    $eksemplarPerBuku = 10;
    $hargaPerEksemplar = 5000;
    $jumlahEksemplar = $jumlahBuku * $eksemplarPerBuku;
    $totalHarga = 0;
    $diskonTotal = 0;

    if ($jumlahEksemplar <= 100) {
        // Tidak ada diskon
        $totalHarga = $jumlahEksemplar * $hargaPerEksemplar;
        $diskonTotal = 0;
    } elseif ($jumlahEksemplar <= 200) {
        // 100 eksemplar pertama diskon 5%
        $harga100Pertama = 100 * $hargaPerEksemplar * 0.95;
        $diskon100Pertama = 100 * $hargaPerEksemplar * 0.05;

        // Sisanya diskon 15%
        $jumlahSisa = $jumlahEksemplar - 100;
        $hargaSisa = $jumlahSisa * $hargaPerEksemplar * 0.85;
        $diskonSisa = $jumlahSisa * $hargaPerEksemplar * 0.15;

        $totalHarga = $harga100Pertama + $hargaSisa;
        $diskonTotal = $diskon100Pertama + $diskonSisa;
    } else {
        // 100 eksemplar pertama diskon 7%
        $harga100Pertama = 100 * $hargaPerEksemplar * 0.93;
        $diskon100Pertama = 100 * $hargaPerEksemplar * 0.07;

        // 100 eksemplar kedua diskon 17%
        $harga100Kedua = 100 * $hargaPerEksemplar * 0.83;
        $diskon100Kedua = 100 * $hargaPerEksemplar * 0.17;

        // Sisanya diskon 27%
        $jumlahSisa = $jumlahEksemplar - 200;
        $hargaSisa = $jumlahSisa * $hargaPerEksemplar * 0.73;
        $diskonSisa = $jumlahSisa * $hargaPerEksemplar * 0.27;

        $totalHarga = $harga100Pertama + $harga100Kedua + $hargaSisa;
        $diskonTotal = $diskon100Pertama + $diskon100Kedua + $diskonSisa;
    }

    return [$totalHarga, $diskonTotal];
}

$jumlahBuku = intval(readline("Masukkan jumlah buku yang dibeli: "));
list($totalHarga, $diskonTotal) = hitungTotalHarga($jumlahBuku);

echo "Jumlah buku yang dibeli: $jumlahBuku buku (setara dengan " . ($jumlahBuku * 10) . " eksemplar)\n";
echo "Total harga yang harus dibayar: Rp. " . number_format($totalHarga, 0, ',', '.') . "\n";
echo "Total diskon yang didapat: Rp. " . number_format($diskonTotal, 0, ',', '.') . "\n";

?>