//variabel
var title = "Apa pengertian Website ?";
let deskripsi =
  "Website adalah kumpulan halaman web yang saling terhubung dan berisi informasi yang dapat diakses melalui internet. Website dapat berisi teks, gambar, suara, dan animasi.";
const deskripsi2 = "Website adalah sistem yang membantu kerja manusia";
var title = "Apa pengertian javascript ?";

//teks menggunakan id
// document.getElementById("title").innerHTML = title;
// $('.title').html(title);

//teks menggunakan class
// document.getElementById("deskripsi").innerHTML = deskripsi2;
// document.getElementById("deskripsi2").innerHTML = deskripsi;

//tipe data
//string
let string = "Hello world 22";

//number
let number = 10000;

//bigint
let bigint = 9007199254740991;

//boolean
let boolean = true;

//operator

//samadengan
let nilai_a = 10;
let nilai_b = 20;

//penjumlahan
let tambah = nilai_a + nilai_b;

//perkalian
let perkalian = nilai_a * nilai_b;

// let a = 1.5;
// let b = 0.5;

//pembagian
// let pembagian = parseFloat(a) / parseFloat(b);
let pembagian = nilai_b / nilai_a;

//pengurangan
let pengurangan = nilai_b - nilai_a;

nilai_a += 10;
nilai_a += 5;

let hasil_kondisi = "";
if (nilai_a != nilai_b) {
  kondisi = "benar";
} else {
  kondisi = "salah";
}

// nilai_a == nilai_b ? console.log('benar') : console.log('salah');

// document.getElementById("deskripsi").innerHTML = kondisi;
// console.log(tambah);

//array
let data_array = ["david", "yudi", "andre", "siska", "yuni"];
const data_array2 = new Array("acer", "asus", "lenovo", "hp", "axioo");

let data_keranjang = [
  {
    nama: "baju a",
    qty: 1,
    price: 20000,
  },
  {
    nama: "celana a",
    qty: 2,
    price: 100000,
  },
];

let array_number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let hasil_jumlah = 0;
data_keranjang.forEach((element) => {
  // console.log(element.nama, '('+element.qty+')');
  hasil_jumlah += element.price;
});

// console.log(hasil_jumlah);

// const angka1 = document.querySelector('#angka1').value;


const pilihan = document.querySelector("#operator");

document.getElementById('btn_tambah').onclick = () => {
    let angka1 = document.getElementById("angka1").value;
    let angka2 = document.getElementById("angka2").value;
    let hasil = parseInt(angka1) + parseInt(angka2);
    document.getElementById("hasil_perhitungan").value = hasil;
}

document.getElementById('btn-kurang').onclick = () => {
    let angka1 = document.getElementById("angka1").value;
    let angka2 = document.getElementById("angka2").value;
    let hasil = parseInt(angka1) - parseInt(angka2);
    document.getElementById("hasil_perhitungan").value = hasil;
}

document.getElementById('btn-perkalian').onclick = () => {
    let angka1 = document.getElementById("angka1").value;
    let angka2 = document.getElementById("angka2").value;
    let hasil = parseInt(angka1) * parseInt(angka2);
    document.getElementById("hasil_perhitungan").value = hasil;
}

document.getElementById('btn-pembagian').onclick = () => {
    let angka1 = document.getElementById("angka1").value;
    let angka2 = document.getElementById("angka2").value;
    let hasil = parseInt(angka1) / parseInt(angka2);
    document.getElementById("hasil_perhitungan").value = hasil;
}

document.getElementById('search').onkeyup = () => {
    let search = document.getElementById('search').value;
    console.log(search);
    
}

//jquery
// const angka_1 = $('#angka1').val();
