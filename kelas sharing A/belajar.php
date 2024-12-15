<?php

$teks = 'PHP';

$belajar = 'Saya belanajar bahasa pemrograman ' . $teks;
// echo $belajar;

//tipe data integer
$nilai = 100;

//tipe data float
$ipk = 3.5;

$array = [1, 2, 3, 4, 5];
$array2 = array(1, 2, 3, 4, 5);


$nilai_a = 120;
$nilai_b = 100;


$hasil_penjumlahan = $nilai_a + $nilai_b;
$hasil_pengurangan = $nilai_a - $nilai_b;
$hasil_perkalian = $nilai_a * $nilai_b;
$hasil_pembagian = $nilai_a / $nilai_b;

// echo $hasil_pembagian;


// var_dump($nilai_a != $nilai_b);


//kondisi
if($nilai_a != $nilai_b) {
    echo 'benar';
} else {
    echo'salah';
}

switch($nilai_a) {
    case 1:
        echo 'satu';
        break;
    case 10:
        echo 'dua';
        break;
    case 100:
        echo 'tiga';
        break;
    default:
        echo 'tidak ada';
        break;
}

//array

$data_array = [
    [
        'nama' => 'Budi',
        'usia' => '25',
        'pekerjaan' => 'Programmer'
    ],
    [
        'nama' => 'Joko',
        'usia' => '30',
        'pekerjaan' => 'Designer'
    ],
    [
        'nama' => 'Tono',
        'usia' => '35',
        'pekerjaan' => 'Manager'
    ]
];

//looping

foreach($data_array as $value) {
    if($value['nama'] == 'Budi') {
        continue;
    }
    echo 'Nama: '. $value['nama'] . '<br>' . 'Usia: ' . $value['usia'] . '<br>' . 'Pekerjaan: ' . $value['pekerjaan'] . '<br>';
}



?>

