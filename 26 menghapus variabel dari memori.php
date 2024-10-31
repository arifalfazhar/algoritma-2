<?php
$variabel = "hallo,arif";
//menghapus variable dari memori
unset($variabel);
//memeriksa apakah variable masih ada
if (!isset($variabel))
{
    echo "variable telah didelete.";
} else {
    echo "variable masih ada.";
}
echo "<i><br><br><strong>By :arif alfazhar</strong=";

?>