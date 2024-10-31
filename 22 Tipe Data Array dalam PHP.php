<?php
//cara membuat indexed array
$minuman = array("marimas", "<p>teh manis", "<p>bandrek");
array("marimas");
array("teh manis");
array("bandrek");

//mengakses elemen array
echo $minuman  = "<p>marimas"; //output:kopi
echo $minuman = "<p>teh manis"; //output:Teh
echo $minuman  = "<p>bandrek"; //output:jus jeruk
//menampilkan seluruh isi array
print_r($minuman);

$makanan = ["ayam rendang", "bubur", "nasi goreng"];
array("ayam  rendang");
array("bubur");
array("nasi goreng");

echo $makanan  = "<p>ayam rendang"; //output:ayam goreng
echo $makanan = "<p>bubur"; //output:sate
echo $makanan  = "<p>nasi goreng"; //output:lontong

print_r($makanan);

echo "<i><p><br><strong>By  :arif alfazhar</strong>";
?>