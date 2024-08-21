<?php

for ($tahun = 1600; $tahun <= 2024; $tahun++) {
    if ($tahun % 400 == 0) {
        echo $tahun ."tahun kabisat <br>";
    }else if ($tahun % 100 == 0) {
        echo $tahun ."bukan kabisat <br>";
    }else if ($tahun % 4 == 0) {
        echo $tahun ."tahun kabisat <br>";
    }else if ($tahun == 1700 && $tahun == 1800) {
        echo $tahun ."tahun ini bukan tahub kabisat";
    }
}