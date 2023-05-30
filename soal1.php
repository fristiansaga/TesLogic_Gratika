<?php
function urutArray($arr) {
    $angka = [];
    $abjad = [];
  
    foreach ($arr as $item) {
        if (is_numeric($item)) {
            $angka[] = $item;
        } else {
            $abjad[] = $item;
        }
    }
  
    sort($abjad);
    sort($angka, SORT_NUMERIC);
  
    return array_merge($abjad, $angka);
}

$arr = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];
$hasil = urutArray($arr);

print_r($hasil);
?>