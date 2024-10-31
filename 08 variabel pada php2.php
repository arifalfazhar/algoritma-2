

<?php

$nisn1 = "arif";
$harga = 1000;
$nama_barang = "rx king setan";
$harga = 4000;
$stok = 40;
// membuat variabel baru
$stok = 40;

// mengisi ulang variabel dengan nilai baru
$stok = 34;

//	1) Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
// Contoh ❌ : Salah
// $!nama = "";
// $46rosi = "";
// Contoh ✔️ : Benar
$nama = "arif";
$rosi46 = "arif al";
// 2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
$nama_barang = "motor ";
$namaPembeli = "subardi"; // menggunakan camelCase
// 3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
$nama_barang = "motor";
$namaPembeli = "subardi";
$harga = 12000;
// 4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
// Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "HTML";
$BELAJAR = "CSS";
$belajar = "JS";

// ============================== cara mencetak ======================================
echo 
$nisn1,"<p>".
$harga,"<p>".
$nama_barang,"<p>".
$harga,"<p>".
$stok,"<p>".
$nama,"<p>".
$rosi46,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>". 
$nama_barang,"<p>".
$namaPembeli,"<p>".
$harga,"<p>".
$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar;